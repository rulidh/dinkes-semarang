<header class="navbar sticky-top bg-dark p-0 flex-md-nowrap shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/dashboard">Dinkes Kota Semarang</a>

    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="true" aria-label="Toggle search">
            <svg class="bi"><use xlink:href="#search"/></svg>
        </button>
        </li>
        <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true" aria-label="Toggle navigation">
            <svg class="bi"><use xlink:href="#list"/></svg>
        </button>
        </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100">
        <input class="form-control w-100 rounded-0 border-0 collapse" type="text" placeholder="Search" aria-label="Search">
    </div>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="nav-link px-3">
                    <i class="bi bi-door-closed-fill"></i>Logout
                </button>
              </form>
        </div>
    </div>
</header>