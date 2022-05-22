<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/books*') ? 'active' : '' }}" href="/dashboard/books">
            <span data-feather="file-text"></span>
            Books
          </a>
        </li>          
      </ul>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-4 mt-4 mb-3 text-muted">
        <span>ADMINISTRATOR</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span data-feather="grid"></span>
            Book Categories
          </a>
        </li>          
      </ul>

    </div>
  </nav>
