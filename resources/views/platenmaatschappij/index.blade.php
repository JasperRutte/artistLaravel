@extends('layouts.app')
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
@section('content')


    <div class="container">
        <div class="w-50">
            <table class="table table-bordered mx-5 mt-4">
                <thead class="">
                    <tr>
                        <th scope="col">platenmaatschappij (Click om naam aan te passen)</th>
                        <th scope="col">Verwijder platenmaatschappij</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($platenmaatschappij as $platenmaatschappij)
                        <tr>
                            <td class="col-9"><a href="/platenmaatschappij/{{ $platenmaatschappij->id }}">
                                    {{ ucfirst($platenmaatschappij->platenmaatschappij) }}</a>
                            </td>
                            <td>
                                <form id="delete-frm" class="" action="{{ route('platenmaatschappij.destroy', ['platenmaatschappij' => $platenmaatschappij]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')" {{ !$platenmaatschappij->allArtists->isEmpty() ? "disabled" : "" }} class="float-end btn btn-outline-danger col-12">Delete artist</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <p class="text-warning">Er zijn nog geen platenmaatschappijen toegevoegd</p>
                    @endforelse
                </tbody>
            </table>

            <div class="col-3 gx-0">
                <a href="/platenmaatschappij/create" class="btn btn-success btn-md my-2 mx-5 col-12">Voeg een platenmaatschappij toe</a>
            </div>
        </div>
    </div>

@endsection
