@extends('layouts.mainHome')

@section('container')

@foreach ($posts as $post)
<header class="masthead">
  <div class="container px-4 px-lg-5 h-100">
      <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
          <div class="col-lg-8 align-self-end">
              <h1 class="text-white font-weight-bold">Tentang Kami</h1>
              <hr class="divider" />
          </div>
          <div class="col-lg-8 align-self-baseline">
              <p class="text-white-75 mb-5">{!! Str::limit(str_replace(['<div>','</div>'], ' ', $post->tentangkami), 400) !!}</p>
              <a class="btn warnaMerah btn-xl" href="#about">Find Out More</a> <!--dari primary ke danger-->
          </div>
      </div>
  </div>
</header>
<!---Awal XX--->
<section id="ppp">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img width="2000" height="500" src="{{ asset('images/' . $post->image1) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $post->labelimage1 }}</h5>
            <p>{{ $post->ketimage1 }}</p>
          </div>
        </div>
        <div class="carousel-item">
          <img width="2000" height="500" src="{{ asset('images/' . $post->image2) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $post->labelimage2 }}</h5>
            <p>{{ $post->ketimage2 }}</p>
          </div>
        </div>
        <div class="carousel-item">
          <img width="2000" height="500" src="{{ asset('images/' . $post->image3) }}" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{ $post->labelimage3 }}</h5>
            <p>{{ $post->ketimage3 }}</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>

<!---Awal XX--->
<section class="page-section warnaMerah" id="about">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
              <h2 class="text-white mt-0">VISI</h2>
              <hr class="divider divider-light" />
              
              <p class="text-white-75 mb-4">{!! str_replace(['<div>','</div>'], ' ', $post->visi) !!}</p>

              <h2 class="text-white mt-0">MISI</h2>
              <hr class="divider divider-light" />
              <p class="text-white-75 mb-4">{!! str_replace(['<div>','</div>'], ' ', $post->misi) !!}</p>
              <a class="btn btn-light btn-xl" href="#services">Get Started!</a>
          </div>
      </div>
  </div>
</section>

<!---Awal XX--->
<section class="page-section" id="services">
  <div class="container px-4 px-lg-5">
      <h2 class="text-center mt-0">Our Services</h2>
      <hr class="divider" />
      <div class="row gx-4 gx-lg-5">
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Steel</h3>
                  <p class="text-muted mb-0">{!! $post->OS_steel !!}</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Civil</h3>
                  <p class="text-muted mb-0">{!! $post->OS_civil !!}</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Tanks</h3>
                  <p class="text-muted mb-0">{!! $post->OS_tank !!}</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Screw</h3>
                  <p class="text-muted mb-0">{!! $post->OS_srew !!}</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                <h3 class="h4 mb-2">Heavy</h3>
                <p class="text-muted mb-0">{!! $post->OS_heavy !!}</p>
            </div>
        </div>
      </div>
  </div>
</section>
@endforeach

@endsection