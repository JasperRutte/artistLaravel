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
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link disabled" href="/welcome">artists</a>
                </li>
            </ul>
        </nav>

        <div class="mx-5">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Platenmaatschappij</th>
                    <th scope="col">Bandleden</th>
                    <th scope="col">Genre</th>
                </tr>
                </thead>
                <tbody>
                @forelse($artists as $artist)
                    <tr>
                        <td><a href="./artists/{{ $artist->id }}">{{ ucfirst($artist->naam) }}</a></td>
                        <td>{{ ucfirst($artist->platenmaatschappij) }}</td>
                        <td>{{ ucfirst($artist->bandleden) }}</td>
                        <td>{{ ucfirst($artist->genre) }}</td>
                    </tr>
                @empty
                    <p class="text-warning">No artists added yet...</p>
                @endforelse

                </tbody>
            </table>
        </div>
        <div class="col-4">
            <a href="/artist/create" class="btn btn-success btn-md my-2 mx-5">Add Artist</a>
        </div>


        <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    </body>
</html>
