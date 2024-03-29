@extends('dashboard.layouts.main')

@section('container')

<style type="text/css">  
  .gallery  
  {  
      display: inline-block;  
      margin-top: 20px;  
  }  
  .close-icon{  
  border-radius: 50%;  
      position: absolute;  
      right: 5px;  
      top: -10px;  
      padding: 5px 8px;  
  }  
      .form-image-upload{  
          background: #e8e8e8 none repeat scroll 0 0;  
          padding: 15px;  
      }  
  </style> 
  


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/steel/{{ $post->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label  @error('slug') is-invalid @enderror">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly required value="{{ old('slug', $post->slug) }}">
            @error('slug')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>

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
            {{-- <input id="body" type="hidden" name="body" required value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor> --}}
            <textarea id="summernote" name="body">{{ old('body', $post->body) }}</textarea>
            @error('body')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/steel/checkSlug?title='+title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    $(document).ready(function() {
        $('#summernote').summernote();
    });

    // document.addEventListener('trix-file-accept', function(e){
    //     e.preventDefault();
    // })
</script>

@endsection