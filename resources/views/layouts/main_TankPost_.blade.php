<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../style_TankPost.css">
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="../scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    
    <title>PT Mateng Sari Makmur | {{ $title }}</title>
  </head>
  <body>

  <!-- Navigation-->
  
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="../images/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
                  <li><a class="dropdown-item" href="/steel">Steel Construction</a></li>
                  <li><a class="dropdown-item" href="/civil">Civil Worus</a></li>
                  <li><a class="dropdown-item" href="/tanks">Tanks</a></li>
                  <li><a class="dropdown-item" href="/screw">Screw Conveyor</a></li>
                  <li><a class="dropdown-item" href="/heavy">Heavy Equipment Rentals (Excavator)</a></li>
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

<header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <h1 class="text-white font-weight-bold">Your Favorite Place for Free Bootstrap Themes</h1>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                <a class="btn btn-primary btn-xl" href="#about">Find Out More</a>
            </div>
        </div>
    </div>
</header>

    <div class="container">
        @yield('container')
    </div>

    <footer class="text-white pt-5 pb-5" style="background-color: #cc5151">
      <hr>
      <div class="container">
        <div class="row">
        <div class="col text-center">
          <h4>PT Mateng Sari Makmur</h4>
          <h5>Alamat</h5>
          <div class="row text-start">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque ad nihil qui. Saepe aliquam ex blanditiis expedita quos, voluptatem tempora!</p>
          </div>
        </div>
        <div class="col text-center">
          <h5>Proyek</h5>
          <div class="row">
            <ul class="list-group list-group-flush" >
              <li class="list-group-item text-white" style="background-color: #cc5151"><a>Steel Construction</a></li>
              <li class="list-group-item text-white" style="background-color: #cc5151"><a>Civil Worus</a></li>
              <li class="list-group-item text-white" style="background-color: #cc5151"><a>Tanks</a></li>
              <li class="list-group-item text-white" style="background-color: #cc5151"><a>Screw Conveyor</a></li>
              <li class="list-group-item text-white" style="background-color: #cc5151"><a>Heavy Equipment Rentals (Excavator)</a></li>
            </ul>
          </div>
        </div>
        <div class="col text-center">
          <h5>Kontak</h5>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>072198989xxx</p></div>
          </div>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>08129638xxx</p></div>
          </div>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>admin@matengsarimakmur.com</p></div>
          </div>
          <div class="row text-end">
            <div class="col-5">
              <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            </div>
            <div class="col-1"><p>@MSN.kontraktor</p></div>
          </div>
        </div>
      </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>


  

</html>