<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- //Include bootstrap CSS CDN here -->

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ url()->current() === "http://127.0.0.1:8000" ? 'disabled' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ url()->current() === "http://127.0.0.1:8000/artists" ? 'disabled' : '' }}" href="/artists">artists</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{( url()->current() === "http://127.0.0.1:8000/platenmaatschappij" ? 'disabled' : '' )}}" href="/platenmaatschappij">Platenmaatschappijen</a>
            </li>
        </ul>
    </nav>

    @yield('content')

    </body>
    <!-- //Include bootstrap JS CDN here  -->
</html>
