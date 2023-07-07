<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/logo-dinkes.png">
  <title>
    Dashboard Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- CSS Files -->
  <link id="pagestyle" href="css/dashboard/material-dashboard.css?v=3.1.0" rel="stylesheet" />
</head>

<body class="bg-white-200">
  <main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-danger shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                </div>
              </div>
              <div class="card-body">
                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                      {{ session('loginError') }}
                      <button type="button" class="btn-close btn-danger" data-bs-dismiss= "alert" aria-label="Close"><i class="bi bi-x-lg"></i></button>
                    </div>
                @endif
                <form role="form" class="text-start" action="admin/" method="post">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <input type="name" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" required value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" placeholder="Password" name="password" class="form-control" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-danger w-100 my-4 mb-2">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-12 col-md-6 my-auto">
              <div class="copyright text-center text-sm text-white text-lg-start">
                &copy <script>
                  document.write(new Date().getFullYear())
                </script>,
                Dinas Kesehatan Kota Semarang
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
</html>