<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <style>
        .dropdown-menu .nav-item a { color: #000 !important; }
        .dropdown-toggle:after { content: none; }
        .dropdown-menu .dropdown-menu { margin-left: 0; margin-right: 0; }
        .dropdown-menu li { position: relative }
        .nav-item .submenu { display: none; position: absolute; left: 100%; top: -7px; }
        .dropdown-menu>li:hover { background-color: silver; }
        .dropdown-menu>li:hover>.submenu { display: block; }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand">Laravel 7</a>
        <ul class="navbar-nav m-1">
            @each('testDynamicNavbar.submenu', $menulist, 'menu')
        </ul>
    </nav>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        if($('.dropdown')){
            $('.dropdown-menu').on('click', ($event) => $event.stopPropagation());
            $('#dropdown').attr('data-toggle', 'dropdown');
        }
    </script>
</body>
</html>