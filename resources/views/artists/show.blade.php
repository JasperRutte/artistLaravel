@extends('layouts.app')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')

    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mx-5 mb-10 h1"><a href="/artists" class="btn btn-primary"><- Go Back</a></span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <h1>{!! $artist->naam !!}</h1><br>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">Bandleden</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Platenmaatschappij</th>
                    </tr>
                    <tr>
                        <td>{!! $artist->bandleden !!}</td>
                        <td>{!! $artist->genre !!}</td>
                        <td>{!! ucfirst($artist->platenmaatschappij->platenmaatschappij) !!}</td>
                    </tr>
                    </thead>
                </table>
            </div>
            <div class="row">
                <div class="col-2">
                    <a href="/artist/{{ $artist->id }}/edit" class="btn btn-block btn-outline-secondary col-12">Edit artist</a>
                </div>

                <div class="col-2 gx-0">
                    <form id="delete-frm" class="" action="{{ route('artist.destroy', ['artist' => $artist->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button onclick="return confirm('Are you sure?')" class="float-end btn btn-outline-danger col-12">Delete record label</button>


                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection

