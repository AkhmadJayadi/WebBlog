<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="style.css">
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="scriptsHome1.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    
    <title>PT Mateng Sari Makmur | {{ $title }}</title>
  </head>
  <body>

  <!-- Navigation-->
  @foreach ($postFooter as $post)
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        PT. Mateng Sari Makmur
      </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
              <li class="nav-item">
              <a class="nav-link {{ ($title === "About")?'active':'' }}" aria-current="page" href="/about">About Us</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link {{ ($title === "Proyek")?'active':'' }} dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Proyek
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="/steel#post">Steel Construction</a></li>
                  <li><a class="dropdown-item" href="/civil#post">Civil Works</a></li>
                  <li><a class="dropdown-item" href="/tanks#post">Tanks</a></li>
                  <li><a class="dropdown-item" href="/screw#post">Screw Conveyor</a></li>
                  <li><a class="dropdown-item" href="/heavy#post">Heavy Equipment Rentals (Excavator)</a></li>
              </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link {{ ($title === "Workshop")?'active':'' }}" aria-current="page" href="/workshop">Our workshop x Office</a>
              </li>
              <li class="nav-item">
              <a class="nav-link {{ ($title === "Contact")?'active':'' }}" aria-current="page" href="/contact">Contact Us</a>
              </li>
              
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"> Logout</button>
                      </form>
                    </li>
                </ul>
                </li>
              @else
              <li class="nav-item">
                <a class="nav-link {{ ($title === "login")?'active':'' }}" aria-current="page" href="/login">Login</a>
              </li>    
              @endauth

              


          </ul>
          </div>
      </div>
</nav>

<!-- Masthead-->



    <div class="container-afsdf"> <!--afsdf sengaja untuk buat error agar container tidak jalan-->
        @yield('container')
    </div>

    <footer class="text-white pt-5 pb-5 warnaMerah">
      <hr>
      <div class="container">
        <div class="row">
        <div class="col text-center">
          <h4>PT Mateng Sari Makmur</h4>
          <div class="row text-start">
             <p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.867243217982!2d105.29544981446234!3d-5.437124696056791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dba784d3a693%3A0xb6a2c972c1ffcdb3!2sPT.%20Mateng%20Sari%20Makmur!5e0!3m2!1sen!2sid!4v1652169764221!5m2!1sen!2sid" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </p>
          </div>
        </div>
        <div class="col text-center">
          <h5>Proyek</h5>
          <div class="row">
            <ul class="list-group list-group-flush" >
              <li class="list-group-item text-white warnaMerah"><a>Steel Construction</a></li>
              <li class="list-group-item text-white warnaMerah"><a>Civil Works</a></li>
              <li class="list-group-item text-white warnaMerah"><a>Tanks</a></li>
              <li class="list-group-item text-white warnaMerah"><a>Screw Conveyor</a></li>
              <li class="list-group-item text-white warnaMerah"><a>Heavy Equipment Rentals (Excavator)</a></li>
            </ul>
          </div>
        </div>
        <div class="col text-center">
          <h5>Kontak</h5>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>{{ $post->nohp }}</p></div>
          </div>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>{{ $post->whatsapp }}</p></div>
          </div>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>{{ $post->email }}</p></div>
          </div>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>{{ $post->instagram }}</p></div>
          </div>
        </div>
      </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  @endforeach
  </body>


  

</html>