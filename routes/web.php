<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// artist routes
Route::get('/artists', [\App\Http\Controllers\ArtistController::class, 'index']);
Route::get('/artists/{artist}', [\App\Http\Controllers\ArtistController::class, 'show']);
Route::get('/artist/create', [\App\Http\Controllers\ArtistController::class, 'create']); //shows create post form
Route::post('/artist/create', [\App\Http\Controllers\ArtistController::class, 'store']); //saves the created post to the database
Route::get('/artist/{artist}/edit', [\App\Http\Controllers\ArtistController::class, 'edit']); //shows edit post form
Route::put('/artist/{artist}/edit', [\App\Http\Controllers\ArtistController::class, 'update']); //commits edited post to the database
Route::delete('/artist/{artist}/', [\App\Http\Controllers\ArtistController::class, 'destroy'])->name('artist.destroy');

// platenmaatschappij routes
Route::get('/platenmaatschappij', [\App\Http\Controllers\PlatenmaatschappijController::class, 'index']);
Route::get('/platenmaatschappij/create', [\App\Http\Controllers\PlatenmaatschappijController::class, 'create']);
Route::get('/platenmaatschappij/{platenmaatschappij}', [\App\Http\Controllers\PlatenmaatschappijController::class, 'show']);
Route::post('/platenmaatschappij/create', [\App\Http\Controllers\PlatenmaatschappijController::class, 'store']);
Route::get('/platenmaatschappij/{platenmaatschappij}/edit', [\App\Http\Controllers\PlatenmaatschappijController::class, 'edit']);
Route::put('/platenmaatschappij/{platenmaatschappij}/edit', [\App\Http\Controllers\PlatenmaatschappijController::class, 'update']); //commits edited post to the database
Route::delete('/platenmaatschappij/{platenmaatschappij}/', [\App\Http\Controllers\PlatenmaatschappijController::class, 'destroy'])->name('platenmaatschappij.destroy');

