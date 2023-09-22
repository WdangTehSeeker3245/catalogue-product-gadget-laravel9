{{-- Navbar --}}
<nav class="navbar navbar-expand-lg bg-light shadow">
    <div class="container-fluid">
      <a class="navbar-brand text-uppercase fw-bold" href="#">Catalogue Product Gadget</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Smartphone</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Popular Brand
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Xiaomi</a></li>
            </ul>
          </li>
          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <a href="#" id="loginbtn"class="btn btn-primary d-flex mx-2">Login</a>
      </div>
    </div>
</nav>