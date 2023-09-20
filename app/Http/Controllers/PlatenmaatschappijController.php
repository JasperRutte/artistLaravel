<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Platenmaatschappij;
use Illuminate\Http\Request;
use mysql_xdevapi\TableUpdate;

class PlatenmaatschappijController extends Controller
{
    public function index()
    {
        $platenmaatschappij = Platenmaatschappij::all(); //fetch all blog posts from DB
        return view('platenmaatschappij.index', [
            'platenmaatschappij' => $platenmaatschappij,
        ]); //returns the view with posts
    }

    public function create()
    {
        return view('platenmaatschappij.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'platenmaatschappij' => "required|regex:/^[a-zA-Z , .]+$/u|max:200"
        ]);

        $newPlatenmaatschappij = platenmaatschappij::create([
            'platenmaatschappij' => $request->platenmaatschappij,
        ]);
        return redirect('platenmaatschappij/');
    }

    public function edit(Platenmaatschappij $platenmaatschappij)
    {
        return view('platenmaatschappij.edit',
        [
            'platenmaatschappij' => $platenmaatschappij,
        ]);

    }

    public function update(Request $request, Platenmaatschappij $platenmaatschappij)
    {
        $validated = $request->validate([
            'platenmaatschappij' => "required|regex:/^[a-zA-Z , .]+$/u|max:200"
        ]);

        $platenmaatschappij->update([
            'platenmaatschappij' => $request->platenmaatschappij,

        ]);
        return redirect('platenmaatschappij/' . $platenmaatschappij->id);
    }

    public function show(Platenmaatschappij $platenmaatschappij)
    {
        return view('platenmaatschappij.show', [
            'platenmaatschappij' => $platenmaatschappij
        ]);
    }

    public function destroy(Platenmaatschappij $platenmaatschappij)
    {
        $platenmaatschappij->delete();
        return redirect('/platenmaatschappij');
    }

}


