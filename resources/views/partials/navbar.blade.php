
  <nav class="navbar navbar-expand-lg sticky-top" id="navbar">
        <div class="container container-fluid" id="navbar-inner">
          <a href="/"><img src="/images/logo-dinkes.png" alt="" height="100" width="75" class="m-2 mobile-navbar"></a>
          <a class="navbar-brand text-light" href="/">Dinas Kesehatan<br>Kota Semarang</a>
          <button class="navbar-toggler" style="background-color: white;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class=" collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item m-1">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }} btn btn-dark text-light" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item m-1 dropdown">
                <a href="/profile" class="nav-link btn btn-dark text-light" id="dropdown">Profil</a>
                <ul class="dropdown-menu" aria-labelledby="dropdownBtn">
                  <li class="nav-item m-1">
                    <a href="/profile/visi-misi" class="nav-link dropdown-toggle">Visi Misi</a>
                  </li>
                  <li class="nav-item m-1">
                    <a href="/profile/profil-kesehatan" class="nav-link dropdown-toggle">Profil Kesehatan</a>
                  </li>
                </ul>
              </li>
              @each('partials.submenu', $menulist, 'menu')
              <li class="nav-item m-1">
                <a class="nav-link text-light btn btn-dark" href="https://dinkes.semarangkota.go.id/ppid">PPID</a>
              </li>
              <li class="nav-item m-1">
                <a class="nav-link text-light btn btn-dark" href="https://dinkes.semarangkota.go.id/wbs">WBS</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <script type="text/javascript">
      if($('.dropdown')){
            $('.dropdown-menu').on('click', ($event) => $event.stopPropagation());
            $('#dropdown').attr('data-bs-toggle', 'dropdown');
        }
      
      if(window.matchMedia('(max-width: 700px)').matches) {
        $('a#dropdown').attr('data-bs-toggle', 'dropdown').removeClass('dropdown-toggle');
      }
    </script>