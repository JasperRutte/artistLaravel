@extends('layouts.app')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')
    <div class="container">
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

        <div class="d-flex p-2">
            <form action="" method="POST">
                @csrf
                <label for="platenmaatschappij">Platenmaatschappij</label>
                <input type="text" id="title" class="form-control" name="platenmaatschappij">

                <div class="control-group col-12 text-center">
                    <button id="btn-submit" class="col-8 btn btn-success">
                        Voeg toe
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection


