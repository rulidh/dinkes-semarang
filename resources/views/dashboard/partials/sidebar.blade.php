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
                <a class="nav-link btn btn-toggle d-flex align-items-center rounded border-0 collapsed gap-2 link-dark" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="true">Posts</a>
                <div class="collapse show text" id="dashboard-collapse">
                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                        <li><a href="/dashboard/posts" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-file-text"></i>All Posts</a></li>
                        <li><a href="/dashboard/posts/create" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-file-earmark-plus"></i>Add Posts</a></li>
                        <li><a href="/dashboard/categories" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-tags"></i>All Categories</a></li>
                        <li><a href="/dashboard/categories/create" class="link-body-emphasis d-inline-flex text-decoration-none rounded"><i class="bi bi-tag"></i>Add Categories</a></li>
                    </ul>
                </div>
            </li>
            <li class="nav-item mx-2 my-1">
              <a class="nav-link btn btn-toggle d-flex align-items-center rounded collapesed gap-2 link-dark border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">Pages</a>
              <div class="collapse show text" id="home-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">All Pages</a></li>
                  <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Add Pages</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
</div>