<nav class="navbar navbar-expand-lg {{ Request::is('/') || Request::is('profile') ? 'fixed-top' : 'sticky-top' }}" id="navbar">
        <div class="container-fluid" id="navbar-inner">
          <a href="/"><img src="/images/logo-dinkes.png" alt="" height="100" width="75" class="m-2"></a>
          <a class="navbar-brand text-light" href="/">Dinas Kesehatan<br>Kota Semarang</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item m-1">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }} btn btn-dark text-light" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item m-1">
                <a class="nav-link {{ Request::is('profile') ? 'active' : '' }} btn btn-dark text-light" href="/profile">Profile</a>
              </li>
              <li class="nav-item dropdown m-1">
                <a class="nav-link dropdown-toggle btn btn-dark text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Layanan Publik
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Pelayanan Puskesmas</a></li>
                  <li><a class="dropdown-item" href="#">Pelayanan Laboratorium Kesehatan</a></li>
                  <li><a class="dropdown-item" href="#">Pelayanan Ambulan Hebat</a></li>
                  <li><a class="dropdown-item" href="#">Pelayanan Laik Sehat Makanan</a></li>
                  <li><a class="dropdown-item" href="#">Pelayanan Rekomendasi Perijinan Sarana Kesehatan</a></li>
                  <li><a class="dropdown-item" href="#">Pelayanan Data & Informasi</a></li>
                  <li><a class="dropdown-item" href="#">Pelayanan Ambulan Hebat</a></li>
                </ul>
              </li>
              <li class="nav-item m-1">
                <a class="nav-link {{ Request::is('download') ? 'active' : '' }} btn btn-dark text-light" href="#">Download</a>
              </li>
              <li class="nav-item m-1">
                <a class="nav-link text-light btn btn-dark" href="#">PPID</a>
              </li>
              <li class="nav-item m-1">
                <a class="nav-link text-light btn btn-dark" href="#">WBS</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>