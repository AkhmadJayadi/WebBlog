@extends('layouts.main')

@section('container')

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
          <img width="2000" height="500" src="images/kontraktor.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img width="2000" height="500" src="images/kontraktorr.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img width="2000" height="500" src="images/kontraktorrr.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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
<section class="page-section bg-danger" id="about">
  <div class="container px-4 px-lg-5">
      <div class="row gx-4 gx-lg-5 justify-content-center">
          <div class="col-lg-8 text-center">
              <h2 class="text-white mt-0">VISI</h2>
              <hr class="divider divider-light" />
              <p class="text-white-75 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt officiis sunt officia fugiat tenetur quo saepe. Atque praesentium doloremque delectus exercitationem quae, sed molestias distinctio. Tenetur, magnam. Quas quaerat aspernatur aliquid facilis voluptate est? Doloribus culpa, magni sequi itaque cupiditate optio illum explicabo ipsam voluptate debitis, reiciendis, placeat ipsum dolores.</p>

              <h2 class="text-white mt-0">MISI</h2>
              <hr class="divider divider-light" />
              <p class="text-white-75 mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt officiis sunt officia fugiat tenetur quo saepe. Atque praesentium doloremque delectus exercitationem quae, sed molestias distinctio. Tenetur, magnam. Quas quaerat aspernatur aliquid facilis voluptate est? Doloribus culpa, magni sequi itaque cupiditate optio illum explicabo ipsam voluptate debitis, reiciendis, placeat ipsum dolores.</p>
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
                  <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis ex quaerat saepe fugiat nam hic culpa alias veritatis incidunt temporibus!</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Civil</h3>
                  <p class="text-muted mb-0">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex laudantium quibusdam non sunt dolore voluptatum eligendi architecto ipsam iure animi?</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Tanks</h3>
                  <p class="text-muted mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio id vero debitis illum impedit quo quidem dolor facere deleniti? Libero?</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
              <div class="mt-5">
                  <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                  <h3 class="h4 mb-2">Screw</h3>
                  <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sequi voluptatem placeat id sunt ratione expedita eligendi molestiae eveniet alias?</p>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="mt-5">
                <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                <h3 class="h4 mb-2">Heavy</h3>
                <p class="text-muted mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate sequi voluptatem placeat id sunt ratione expedita eligendi molestiae eveniet alias?</p>
            </div>
        </div>
      </div>
  </div>
</section>

@endsection