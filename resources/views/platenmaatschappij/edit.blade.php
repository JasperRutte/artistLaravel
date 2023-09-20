@extends('layouts.app')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>


    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="control-group col-6">
            <label for="platenmaatschappij">platenmaatschappij:</label>
            <input type="text" id="platenmaatschappij" class="form-control" name="platenmaatschappij" value="{{ $platenmaatschappij->platenmaatschappij }}">
        </div>
    <button id="btn-submit" class="btn btn-primary">
        Pas aan
    </button>
    </form>
@endsection
