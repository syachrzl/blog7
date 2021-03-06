<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Laravel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link{{request()->is('/') ? ' active' : ''}}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{request()->is('kotapage') ? ' active' : ''}}" href="kotapage">Informasi Kota</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{request()->is('desapage') ? ' active' : ''}}" href="desapage">Infomasi Desa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{request()->is('negarapage') ? ' active' : ''}}" href="negarapage">Infomasi Negara</a>
        </li>
        <li class="nav-item">
          <a class="nav-link{{request()->is('article') ? ' active' : ''}}" href="article">Artikel</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
