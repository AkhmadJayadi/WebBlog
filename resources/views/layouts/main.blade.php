<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PT Mateng Sari Makmur | {{ $title }}</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Proyek
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Steel Construction</a></li>
                <li><a class="dropdown-item" href="#">Civil Worus</a></li>
                <li><a class="dropdown-item" href="#">Tanks</a></li>
                <li><a class="dropdown-item" href="#">Screw Conveyor</a></li>
                <li><a class="dropdown-item" href="#">Heavy Equipment Rentals (Excavator)</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Workshop")?'active':'' }}" aria-current="page" href="/workshop">Our workshop x Office</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact")?'active':'' }}" aria-current="page" href="/contact">Contact Us</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>

    <div class="container mt-4">
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>