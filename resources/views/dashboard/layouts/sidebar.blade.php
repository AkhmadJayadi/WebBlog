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
      </ul>
    </div>
  </nav>