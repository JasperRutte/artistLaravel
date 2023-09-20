<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Platenmaatschappij;
use Illuminate\Http\Request;



class ArtistController extends Controller
{

    public function index() // to fetch all artists/info from db and show them
    {
        $artists = Artist::all(); //fetch all artists from DB
        return view('artists.index', [
                'artists' => $artists,
            ]); //returns the view with artists
    }

    public function create()
    {
        $artists = Artist::all(); //fetch all artists
        $platenmaatschappij = Platenmaatschappij::all(); // fetch all record labels
        return view('artists.create', [
            'platenmaatschappij'=>$platenmaatschappij,
            'artists' => $artists,
        ]); // return view with options to create an artist, and all the record labels

    }


    public function store(Request $request) // store the created artist
    {
        $validated = $request->validate([
            'naam' => 'required|regex:/^[a-zA-Z ,]+$/u|max:255',
            'bandleden' => 'required|regex:/^[a-zA-Z ,]+$/u|max:800',
            'genre' => 'required',
            'platenmaatschappij_id' => 'required',
        ]); // need required for validations


//        dd([$request->platenmaatschappij_id, $validated]);

        $newArtist = Artist::create([
            'naam' => $request->naam,
            'bandleden' => $request->bandleden,
            'genre' => $request->genre,
            'platenmaatschappij_id' => $request->platenmaatschappij_id,
        ]);

        return redirect('artists/');
    }

    public function show(Artist $Artist, Platenmaatschappij $platenmaatschappij) // view a specific artist
    {
        return view('artists.show', [
            'artist' => $Artist,
            'platenmaatschappij' => $platenmaatschappij
        ]);
    }



    public function edit(Artist $Artist)// edit an artist
    {

        $artist = Artist::all();
        $platenmaatschappij = Platenmaatschappij::all();
        return view('artists.edit', [
            'test1' => $artist,
            'artist' => $Artist,
            'platenmaatschappij'=> $platenmaatschappij,
        ]); //returns the edit view with the post

    }


    public function update(Request $request, Artist $Artist) // update a artist
    {
        $validated = $request->validate([
            'naam' => 'required|regex:/^[a-zA-Z , .]+$/u|max:255',
            'bandleden' => 'required|regex:/^[a-zA-Z , .]+$/u|max:800',
            'genre' => 'required',
            'platenmaatschappij_id' => 'required',
        ]);

        $Artist->update([
            'naam' => $request->naam,
            'bandleden' => $request->bandleden,
            'genre' => $request->genre,
            'platenmaatschappij_id' => $request->platenmaatschappij_id,
        ]);

        return redirect('artists/' . $Artist->id);
}


    public function destroy(Artist $Artist) // delete artist
    {
        $Artist->delete();

        return redirect('/artists');
    }
}
