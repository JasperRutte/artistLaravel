@extends('layouts.app')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')

    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mx-5 mb-10 h1"><a href="/artists/{{ $artist->id }}" class="btn btn-primary"><- Go Back</a></span>
    </nav>

    <div class="container">
        <div class="row">
                <div class="border rounded mt-5 pl-4 pr-4 pt-4 pb-4">
                    <h1 class="display-4">Edit</h1>

                    @if ($errors->any())  {{-- Checks for empty textfields, radiobuttons and dropboxes --}}
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
                        @method('PUT')

                        <div class="row">

                            <div class="control-group col-12">
                                <label for="naam">Bandnaam/artisten naam</label>
                                <input type="text" id="naam" class="form-control" name="naam"
                                       placeholder="Enter Post Title" value="{{ $artist->naam }}">
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="bandleden">Bandleden</label>
                                <textarea id="bandleden" class="form-control" name="bandleden" placeholder="bandleden"
                                          rows="5">{{ $artist->bandleden }}</textarea>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="platenmaatschappij">Platenmaatschappij</label>
                                <select name="platenmaatschappij_id" id="platenmaatschappij" class="form-control">
                                    <optgroup label="platenmaatschappij">
                                        @forelse($platenmaatschappij as $platenmaatschappij) {{-- loop through all the platenmaatschappijen and make a label out of them --}}
                                            <option value="{{ $platenmaatschappij->id }}" {{ $artist->platenmaatschappij_id == $platenmaatschappij->id ? 'selected' : '' }}>{{ ucfirst($platenmaatschappij->platenmaatschappij) }}</option> {{--also checks for --}}
                                        @empty
                                            <option value="No artists" disabled>No artists added yet...</option> {{-- if there is no platenmaatschappij, show this message --}}
                                        @endforelse
                                    </optgroup>
                                </select>
                            </div>

                            <div class="control-group col-12 mt-2">
                                <label for="genre">Genre:</label><br>

                                <input type="radio" id="rock" name="genre" value="Rock" {{ $artist->genre == 'Rock' ? 'checked' : ''}}>
                                <label for="rock">Rock</label><br>

                                <input type="radio" id="pop" name="genre" value="Pop" {{ $artist->genre == 'Pop' ? 'checked' : ''}}>
                                <label for="pop">Pop</label><br>

                                <input type="radio" id="metal" name="genre" value="Metal" {{ $artist->genre == 'Metal' ? 'checked' : ''}}>
                                <label for="metal">Metal</label><br>

                                <input type="radio" id="dnb" name="genre" value="D 'n B" {{ $artist->genre == "D 'n B" ? 'checked' : ''}}>
                                <label for="dnb">D'n B</label><br>
                            </div>


                        </div>
                            <div class="control-group text-center">
                                <button id="btn-submit" class="btn btn-primary">
                                Update Post
                                </button>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@endsection

