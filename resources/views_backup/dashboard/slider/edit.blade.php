@extends('dashboard.layouts.main')

@section('container')
{{-- @foreach ($post as $post) --}}

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/slider/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Label</label>
          <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="label" required autofocus value="{{ old('title', $post->label) }}">
          @error('title')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label  @error('keterangan') is-invalid @enderror">Keterangan</label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required value="{{ old('keterangan', $post->keterangan) }}">
            @error('keterangan')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>
          
          <div class="col-md-12 mt-2">
            <label>Image Lama</label>
              <div class="col">
                <div class="card-image mt-1">
                  <img src="{{ asset('images/' . $post->gambar) }}" class="card-img" alt="...">
                </div>
              </div>
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

        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>



{{-- @endforeach --}}
@endsection