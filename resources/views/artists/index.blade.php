@extends('layouts.app')
<!-- bootstrap -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')

        <div class="container">
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
                        @forelse($artists as $artist)  {{-- loops through all the artists and fetches their data --}}
                            <tr>
                                <td><a href="./artists/{{ $artist->id }}">{{ ucfirst($artist->naam) }}</a></td>
                                <td>{{ ucfirst($artist->platenmaatschappij->platenmaatschappij) }}</td>
                                <td>{{ ucfirst($artist->bandleden) }}</td>
                                <td>{{ ucfirst($artist->genre) }}</td>
                            </tr>
                        @empty
                            <p class="text-warning">No artists added yet...</p> {{--Show message if no artists added yet--}}
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-2">
                    <a href="/artist/create" class="btn btn-success btn-md my-2 mx-5 col-12">Add Artist</a>
                </div>
            </div>
        </div>


        <!-- bootstrap -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection
