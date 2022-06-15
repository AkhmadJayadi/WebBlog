@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/screw/{{ $post->slug }}">
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

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function(){
        fetch('/dashboard/screw/checkSlug?title='+title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })
</script>

@endsection