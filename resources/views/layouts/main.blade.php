<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    {{-- Navbar --}}
    <link rel="stylesheet" href="/css/navbar.css">
    {{-- Carousel --}}
    <link rel="stylesheet" href="/css/card-carousel.css">
    {{-- Based CSS --}}
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/x-icon" href="/images/logo-dinkes.png">
    <title>{{ $title }}</title>

    {{-- Ajax Jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    {{-- CKEditor --}}
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
</head>
<body>
    @include('partials.navbar')
    <div>
        @yield('container')
    </div>
    @include('partials.footer')   
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="/js/CardCarousel.js"></script>
<script>
    $( window ).on( "unload", function() {
        $.ajax({
            url: "{{ route('ip.offline') }}",
            type: 'get',
            success: function(result) {
                console.log(result)
            }
        });
    } );
</script>
</html>