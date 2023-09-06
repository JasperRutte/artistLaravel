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
                        <td>{!! $artist->platenmaatschappij !!}</td>
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
                        <button class="float-end btn btn-outline-danger col-12">Delete artist</button>
                    </form>
                </div>
                {{--                <button type="button" class="col-6 btn btn-primary btn-md btn-block">Block level button</button>--}}

            </div>
            <div class="">
                {{--                    <a href="/artist/{{ $artist->id }}/edit" class="btn .btn-block btn-secondary">Edit artist</a>--}}

            </div>
            <div class="col">
                </div>

            </div>


        </div>
    </div>

@endsection
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
