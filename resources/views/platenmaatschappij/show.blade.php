@extends('layouts.app')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')
    <div class="m-5">
        <h1>{{ ucfirst($platenmaatschappij->platenmaatschappij) }}</h1>
    </div>

    <div class="col-2 gx-0">
        <p>{{ $platenmaatschappij->allArtists }}</p>
        <p>{{ !$platenmaatschappij->allArtists->isEmpty() ? "fskdfj" : "dwadaw" }}</p>
        <a href="/platenmaatschappij/{{ $platenmaatschappij->id }}/edit" class="btn btn-secondary btn-md my-2 mx-5 col-12">Pas aan</a>
    </div>
@endsection
