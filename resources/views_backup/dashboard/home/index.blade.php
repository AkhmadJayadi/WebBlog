@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>

@foreach ($post as $post)
<div class="col-lg-8">
    <form method="post" action="/dashboard/home/{{ $post->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="col-md-12 mt-2">
          <label style="display: none;">Image1 Lama</label>
            @if ($post->image1)
              <img src="{{ asset('images') . '/' . $post->image1 }}" style="display: none;" class="card-img" alt="..."> 
            @endif
        </div>
        <div class="form-group row">
          <label for="name" style="display: none;" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
          <input type="file" style="display: none;" name="image1" multiple class="form-control" id="images1">
            @if ($errors->has('images1'))
              @foreach ($errors->get('images1') as $error)
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $error }}</strong>
              </span>
              @endforeach
            @endif
        </div>
        <div class="col-md-12 mt-2">
          <div class="images1-preview-div"> </div>
        </div>

        <div class="col-md-12 mt-2">
          <label style="display: none;">Image2 Lama</label>
            @if ($post->image2)
              <img src="{{ asset('images') . '/' . $post->image2 }}" class="card-img" alt="..."> 
            @endif
        </div>
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
          <input type="file" name="image2" multiple class="form-control" id="images2">
            @if ($errors->has('images2'))
              @foreach ($errors->get('images2') as $error)
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $error }}</strong>
              </span>
              @endforeach
            @endif
        </div>
        <div class="col-md-12 mt-2">
          <div class="images2-preview-div"> </div>
        </div>

        <div class="col-md-12 mt-2">
          <label>Image3 Lama</label>
            @if ($post->image3)
              <img src="{{ asset('images') . '/' . $post->image3 }}" class="card-img" alt="..."> 
            @endif
        </div>
        <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('File') }}</label>
          <input type="file" name="image3" multiple class="form-control" id="images3">
            @if ($errors->has('images3'))
              @foreach ($errors->get('images3') as $error)
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $error }}</strong>
              </span>
              @endforeach
            @endif
        </div>
        <div class="col-md-12 mt-2">
          <div class="images3-preview-div"> </div>
        </div>


        <div class="mb-3">
          <label for="labelimage1" class="form-label">Label Image 1</label>
          <input type="text" class="form-control  @error('labelimage1') is-invalid @enderror" id="labelimage1" name="labelimage1" required autofocus value="{{ old('labelimage1', $post->labelimage1) }}">
          @error('labelimage1')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="labelimage2" class="form-label">Label Image 2</label>
          <input type="text" class="form-control  @error('labelimage2') is-invalid @enderror" id="labelimage2" name="labelimage2" required autofocus value="{{ old('labelimage2', $post->labelimage2) }}">
          @error('labelimage2')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="labelimage3" class="form-label">Label Image 3</label>
          <input type="text" class="form-control  @error('labelimage3') is-invalid @enderror" id="labelimage3" name="labelimage3" required autofocus value="{{ old('labelimage3', $post->labelimage3) }}">
          @error('labelimage3')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="ketimage1" class="form-label">Keterangan Image 1</label>
          <input type="text" class="form-control  @error('ketimage1') is-invalid @enderror" id="ketimage1" name="ketimage1" required autofocus value="{{ old('ketimage1', $post->ketimage1) }}">
          @error('ketimage1')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="ketimage2" class="form-label">Keterangan Image 2</label>
          <input type="text" class="form-control  @error('ketimage2') is-invalid @enderror" id="ketimage2" name="ketimage2" required autofocus value="{{ old('ketimage2', $post->ketimage2) }}">
          @error('ketimage2')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="ketimage3" class="form-label">Keterangan Image 3</label>
          <input type="text" class="form-control  @error('ketimage3') is-invalid @enderror" id="ketimage3" name="ketimage3" required autofocus value="{{ old('ketimage3', $post->ketimage3) }}">
          @error('ketimage3')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="tentangkami" class="form-label  @error('tentangkami') is-invalid @enderror">Tentang Kami</label>
          <input id="tentangkami" type="hidden" name="tentangkami" required value="{{ old('tentangkami', $post->tentangkami) }}">
          <trix-editor input="tentangkami"></trix-editor>
          @error('tentangkami')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="visi" class="form-label  @error('visi') is-invalid @enderror">Visi</label>
          <input id="visi" type="hidden" name="visi" required value="{{ old('visi', $post->visi) }}">
          <trix-editor input="visi"></trix-editor>
          @error('visi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="misi" class="form-label  @error('misi') is-invalid @enderror">Misi</label>
          <input id="misi" type="hidden" name="misi" required value="{{ old('misi', $post->misi) }}">
          <trix-editor input="misi"></trix-editor>
          @error('misi')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="OS_steel" class="form-label  @error('OS_steel') is-invalid @enderror">OS_steel</label>
          <input id="OS_steel" type="hidden" name="OS_steel" required value="{{ old('OS_steel', $post->OS_steel) }}">
          <trix-editor input="OS_steel"></trix-editor>
          @error('OS_steel')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="OS_civil" class="form-label  @error('OS_civil') is-invalid @enderror">OS_civil</label>
          <input id="OS_civil" type="hidden" name="OS_civil" required value="{{ old('OS_civil', $post->OS_civil) }}">
          <trix-editor input="OS_civil"></trix-editor>
          @error('OS_civil')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="OS_tank" class="form-label  @error('OS_tank') is-invalid @enderror">OS_tank</label>
          <input id="OS_tank" type="hidden" name="OS_tank" required value="{{ old('OS_tank', $post->OS_tank) }}">
          <trix-editor input="OS_tank"></trix-editor>
          @error('OS_tank')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="OS_srew" class="form-label  @error('OS_srew') is-invalid @enderror">OS_srew</label>
          <input id="OS_srew" type="hidden" name="OS_srew" required value="{{ old('OS_srew', $post->OS_srew) }}">
          <trix-editor input="OS_srew"></trix-editor>
          @error('OS_srew')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="OS_heavy" class="form-label  @error('OS_heavy') is-invalid @enderror">OS_heavy</label>
          <input id="OS_heavy" type="hidden" name="OS_heavy" required value="{{ old('OS_heavy', $post->OS_heavy) }}">
          <trix-editor input="OS_heavy"></trix-editor>
          @error('OS_heavy')
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

        $('#images1').on('change', function() {
            previewImages(this, 'div.images1-preview-div');
        });
    });

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

        $('#images2').on('change', function() {
            previewImages(this, 'div.images2-preview-div');
        });
    });

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

        $('#images3').on('change', function() {
            previewImages(this, 'div.images3-preview-div');
        });
    });
</script>
@endforeach
@endsection