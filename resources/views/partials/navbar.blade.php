<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ ($title === "Home" ? "active" : "") }}">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ ($title === "Book" ? "active" : "") }}">
              <a class="nav-link" href="/book">Book</a>
            </li>
            <li class="nav-item {{ ($title === "Categories" ? "active" : "") }}">
              <a class="nav-link" href="/categories">Categories</a>
            </li>
            <li class="nav-item {{ ($title === "Author" ? "active" : "") }}">
              <a class="nav-link" href="/author">Author</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</div>