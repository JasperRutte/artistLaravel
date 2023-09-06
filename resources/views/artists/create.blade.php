@extends('layouts.app')
<!-- bootstrap -->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')

    <div class="container">
        <a href="/artists" class="btn btn-primary btn-sm">Go Back</a>
        <div class="row">
            <div class="col-12 pt-2">
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Add a new artist</h1>

                    @if ($errors->any())
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
                            <label for="platenmaatschappij">Platenmaatschappij</label>
                            <select name="platenmaatschappij" id="platenmaatschappij">
                                <optgroup label="platenmaatschappij">
                                    <option value="other" {{ "other" === old('platenmaatschappij') ? 'selected' : '' }}>Other</option>
                                    <option value="universal" {{ "universal" === old('platenmaatschappij') ? 'selected' : '' }}>Universal</option>
                                    <option value="warner" {{ "warner" === old('platenmaatschappij') ? 'selected' : '' }}>Warner</option>
                                    <option value="sony" {{ "sony" === old('platenmaatschappij') ? 'selected' : '' }}>Sony</option>

                                </optgroup>
                            </select>
                        </div><br>

                            <div class="control-group col-12 mt-2">
                                <label for="bandleden">Bandleden:</label>
                                <textarea id="body" class="form-control" name="bandleden" rows="">{{ old('bandleden') }}</textarea>
                            </div><br>

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
