@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/slider" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="label" class="form-label">Title</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="label" required autofocus value="{{ old('title') }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="keterangan" class="form-label">keterangan</label>
          <input type="text" class="form-control  @error('keterangan') is-invalid @enderror" id="keterangan" name="keterangan" required autofocus value="{{ old('keterangan') }}">
          @error('keterangan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

          <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
            <input type="file" name="filename[]" required multiple class="form-control" id="images">
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
        
        <button type="submit" class="btn btn-primary">Create Post</button>
      </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/tank/checkSlug?title='+title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

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

@endsection