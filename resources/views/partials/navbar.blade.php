<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ ($active === "home" ? "active" : "") }}">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item {{ ($active === "book" ? "active" : "") }}">
        <a class="nav-link" href="/book">Book</a>
      </li>
      <li class="nav-item {{ ($active === "categories" ? "active" : "") }}">
        <a class="nav-link" href="/categories">Categories</a>
      </li>
      <li class="nav-item {{ ($active === "author" ? "active" : "") }}">
        <a class="nav-link" href="/author">Author</a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto">
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome back, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-in-right"></i> Logout</button>
            </form>
        </ul>
      </li>
      @else
      <li class="nav-item {{ ($active === "login" ? "active" : "") }}">
        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Sign In</a>
      </li>
      @endauth
    </ul>
    
  </div>
  </div>
</nav>