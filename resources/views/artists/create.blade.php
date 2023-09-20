@extends('layouts.app')
<!-- bootstrap -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')

    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mx-5 mb-10 h1"><a href="/artists/" class="btn btn-primary"><- Go Back</a></span>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Add a new artist</h1>

                    @if ($errors->any()) {{-- Checks for empty textfields, radiobuttons and dropboxes --}}
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <hr>

                    <form action="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="control-group col-12">
                                <label for="naam">Band Naam/Artiest naam:</label>
                                <input type="text" id="title" class="form-control" name="naam" value="{{ old('naam') }}">
                            </div><br>

                            <div>
                                <tbody>
                                    <label for="platenmaatschappij">Platenmaatschappij</label>
                                    <select name="platenmaatschappij_id" id="platenmaatschappij">
                                        <optgroup label="platenmaatschappij">
                                            @forelse($platenmaatschappij as $platenmaatschappij) checks all platenmaatschappijen in platenmaatschappij
                                                <option value="{{ $platenmaatschappij->id }}" {{ old('platenmaatschappij_id') == $platenmaatschappij->id ? 'selected' : '' }}>{{ ucfirst($platenmaatschappij->platenmaatschappij) }}</option>
                                            @empty
                                                <option value="No artists" disabled>No artists added yet...</option> {{--show message if there are no platenmaatschappijen added yet--}}
                                           @endforelse
                                        </optgroup>
                                    </select>
                                </tbody>
                            </div>
                            <br>

                            <div class="control-group col-12 mt-2">
                                <label for="bandleden">Bandleden:</label>
                                <textarea id="body" class="form-control" name="bandleden" rows="">{{ old('bandleden') }}</textarea>
                            </div>
                            <br>

                            <div class="control-group col-12 mt-2">
                                <label for="genre">Genre:</label><br>

                                <input type="radio" id="rock" name="genre" value="Rock" {{ old('genre') === 'Rock' ? 'checked' : '' }}>
                                <label for="rock">Rock</label><br>

                                <input type="radio" id="pop" name="genre" value="Pop" {{ old('genre') === 'Pop' ? 'checked' : '' }}>
                                <label for="pop">Pop</label><br>

                                <input type="radio" id="metal" name="genre" value="Metal" {{ old('genre') === 'Metal' ? 'checked' : '' }}>
                                <label for="metal">Metal</label><br>

                                <input type="radio" id="dnb" name="genre" value="D 'n B" >
                                <label for="dnb">D'n B</label><br>
                            </div>

                            <div class="row mt-2">
                                <div class="control-group col-12 text-center">
                                    <button id="btn-submit" class="col-8 btn btn-success">
                                       Create artist
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection
