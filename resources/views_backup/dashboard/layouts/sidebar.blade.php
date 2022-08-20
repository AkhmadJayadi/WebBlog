<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/home*') ? 'active' : '' }}" href="/dashboard/home">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/slider*') ? 'active' : '' }}" href="/dashboard/slider">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Slider
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/footer*') ? 'active' : '' }}" href="/dashboard/footer">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Footer
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/workshop*') ? 'active' : '' }}" href="/dashboard/workshop">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Workshop
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/tank*') ? 'active' : '' }}" href="/dashboard/tank">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Tanks
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/steel*') ? 'active' : '' }}" href="/dashboard/steel">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Steel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/civil*') ? 'active' : '' }}" href="/dashboard/civil">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Civil
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/screw*') ? 'active' : '' }}" href="/dashboard/screw">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Screw
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/heavy*') ? 'active' : '' }}" href="/dashboard/heavy">
            <span data-feather="file-text" class="align-text-bottom"></span>
            Heavy
          </a>
        </li>
      </ul>
    </div>
  </nav>