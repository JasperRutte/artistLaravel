<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- bootstrap -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link disabled" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="/artists">artists</a>
                </li>
            </ul>
            </div>
        </nav>


        <div id="test" class="h-100 d-flex align-items-center justify-content-center">
            <div style="background:#e8e9eb">
                Welcome to my page...
            </div>
        </div>
    <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
