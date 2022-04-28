<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

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
  </div>
</nav>