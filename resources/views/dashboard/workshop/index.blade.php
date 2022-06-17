@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-10" role="alert">
    {{ session('success') }}
</div>
@endif

@foreach ($post as $post)
<div class="col-lg-8">
    <form method="post" action="/dashboard/workshop/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
          
        <div class="col-md-12 mt-2">
          <label>Image Lama</label>
          @if ($post->image)
            @foreach (explode(';',$post->image) as $row)
                @if ($loop->last) @else
                        <div class="col">
                          <div class="card-image mt-1">
                            <img src="{{ asset('images') . '/' . $row }}" class="card-img" alt="...">
                          </div>
                        </div>
                @endif
            @endforeach
          @endif
        </div>
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
          <input type="file" name="filename[]" multiple class="form-control" id="images">
            @if ($errors->has('images'))
              @foreach ($errors->get('images') as $error)
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $error }}</strong>
              </span>
              @endforeach
            @endif
        </div>
        <div class="col-md-12 mt-2">
          <div class="images-preview-div"> </div>
        </div>
          
          <div class="mb-3">
            <label for="body" class="form-label  @error('body') is-invalid @enderror">Body</label>
            <input id="body" type="hidden" name="body" required value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>
            @error('body')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(function() {
        // Multiple images preview with JavaScript
        var previewImages = function(input, imgPreviewPlaceholder) {
            if (input.files) {
                var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        $($.parseHTML('<img class="col-sm-10 mt-1">')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                    }
                    reader.readAsDataURL(input.files[i]);
                }
            }
        };

        $('#images').on('change', function() {
            previewImages(this, 'div.images-preview-div');
        });
    });
</script>
@endforeach

@endsection