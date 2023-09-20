<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;



class ArtistController extends Controller
{

    public function index()
    {
        $artists = Artist::all(); //fetch all blog posts from DB
        return view('artists.index', [
                'artists' => $artists,
            ]); //returns the view with posts
    }

    public function create()
    {
        return view('artists.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|regex:/^[a-zA-Z ,]+$/u|max:255',
            'bandleden' => 'required|regex:/^[a-zA-Z ,]+$/u|max:800',
            'genre' => 'required',
            'platenmaatschappij' => 'required',
        ]);

        $newArtist = Artist::create([
            'naam' => $request->naam,
            'bandleden' => $request->bandleden,
            'genre' => $request->genre,
            'platenmaatschappij' => $request->platenmaatschappij,
        ]);

        return redirect('artists/');
    }

    public function show(Artist $Artist)
    {
        return view('artists.show', [
            'artist' => $Artist,
        ]); //returns the view with the post
    }



    public function edit(Artist $Artist) //test
    {
        return view('artists.edit', [
            'artist' => $Artist,
        ]); //returns the edit view with the post
    }


    public function update(Request $request, Artist $Artist)
    {
        $validated = $request->validate([
            'naam' => 'required|regex:/^[a-zA-Z , .]+$/u|max:255',
            'bandleden' => 'required|regex:/^[a-zA-Z , .]+$/u|max:800',
            'genre' => 'required',
            'platenmaatschappij' => 'required',
        ]);

        $Artist->update([
            'naam' => $request->naam,
            'bandleden' => $request->bandleden,
            'genre' => $request->genre,
            'platenmaatschappij' => $request->platenmaatschappij,
        ]);

        return redirect('artists/' . $Artist->id);
}


    public function destroy(Artist $Artist)
    {
        $Artist->delete();

        return redirect('/artists');
    }
}
