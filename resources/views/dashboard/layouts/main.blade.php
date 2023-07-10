<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="shortcut icon" href="/images/logo-dinkes.png" type="image/x-icon">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom styles for this template -->
    <link href="/css/dashboard/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard/sidebars.css">
    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>
  </head>

<body>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"id="bd-theme"type="button"aria-expanded="false"data-bs-toggle="dropdown"aria-label="Toggle theme (auto)"><span class="visually-hidden" id="bd-theme-text">Toggle theme</span><i class="d-flex align-items-center bi bi-circle-half"></i></button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false"><i class="d-flex align-items-center bi bi-sun-fill mx-2"></i>Light</button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false"><i class="d-flex align-items-center bi bi-moon-fill mx-2"></i>Dark</button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true"><i class="d-flex align-items-center bi bi-circle-half mx-2"></i>Auto</button>
        </li>
      </ul>
    </div>

    @include('dashboard.partials.navbar')

    <div class="container-fluid">
        <div class="row">
            @include('dashboard.partials.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              @yield('container')
            </main>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="/js/sidebars.js"></script>
</html>
