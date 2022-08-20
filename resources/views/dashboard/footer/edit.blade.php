@extends('dashboard.layouts.main')

@section('container')
@foreach ($post as $post)

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/footer/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nohp" class="form-label">No. HP</label>
          <input type="text" class="form-control  @error('nohp') is-invalid @enderror" id="nohp" name="nohp" required autofocus value="{{ old('nohp', $post->nohp) }}">
          @error('nohp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="whatsapp" class="form-label  @error('whatsapp') is-invalid @enderror">Whatsapp</label>
            <input type="text" class="form-control" id="whatsapp" name="whatsapp" required value="{{ old('whatsapp', $post->whatsapp) }}">
            @error('whatsapp')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
          </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-Mail</label>
          <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email', $post->email) }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <!--askdjjkas-->

        <div class="mb-3">
          <label for="instagram" class="form-label">Instagram</label>
          <input type="text" class="form-control  @error('instagram') is-invalid @enderror" id="instagram" name="instagram" required autofocus value="{{ old('instagram', $post->instagram) }}">
          @error('instagram')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
          
        
        <button type="submit" class="btn btn-primary">Update Post</button>
      </form>
</div>



@endforeach
@endsection