<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary fixed">
    <div class="offcanvas-lg offcanvas-end bg-body-dark" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <ul class="nav flex-column list-unstyled ps-0">
            <li class="nav-item">
              <a class="nav-link d-flex align-items-center gap-2 link-dark" aria-current="page" href="/dashboard"><i class="bi bi-speedometer d-flex align-items-center"></i>Dashboard</a>
            </li>
            <li class="nav-item mx-2 my-1">
                <a class="nav-link btn btn-toggle d-flex align-items-center rounded border-0 collapsed gap-2 link-dark" data-bs-toggle="collapse" data-bs-target="#post-collapse" aria-expanded="true">Posts</a>
                <div class="collapse show text" id="post-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/dashboard/posts" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-file-text"></i>All Posts</a></li>
                        <li><a href="/dashboard/posts/create" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-file-earmark-plus"></i>Add Posts</a></li>
                        <li><a href="/dashboard/categories" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-tags"></i>All Categories</a></li>
                        <li><a href="/dashboard/categories/create" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-tag"></i>Add Categories</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mx-2 my-1">
              <a class="nav-link btn btn-toggle d-flex align-items-center rounded gap-2 link-dark border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#menu-collapse" aria-expanded="true">Menus</a>
              <div class="collapse show text" id="menu-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="/dashboard/menu" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-menu-button-wide"></i>All Menus</a></li>
                  <li><a href="/dashboard/menu/create" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-menu-button"></i>Add Menu</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item mx-2 my-1">
              <a href="/dashboard/file-manager" style="padding: 4px 8px 4px 8px;" class="nav-link btn d-flex align-items-center rounded gap-2 link-dark border-0">File Manager</a>
            </li>
          </ul>
        </div>
      </div>
</div>