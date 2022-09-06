<?php

use Illuminate\Support\Facades\Route;
use App\Models\genres;
use App\Http\Livewire\Click;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('check-click-event', Click::class);

Route::get("/ajax/add-song/{id}", function(Request $request, $id){
    if(!session()->has('playlist')){
        session()->put("playlist", array());
    }
    $data = session()->get('playlist'); 
    array_push($data, $id);
    session()->put("playlist", $data);
    return redirect()->back();
});

Route::get("/remove/song/{id}", function(Request $request, $id){
    $data = session()->get("playlist");
    unset($data[$id]);
    session()->put("playlist", $data);
    return redirect()->back();
});

Route::get('/', function () {
    if(!session()->has('playlist'))
    {
        session()->put("playlist", array());
    }
    $genres = genres::all();
    return view('genres.index')->with("genres", $genres);
});


Route::resource('genres', 'App\Http\Controllers\genresController');
Route::resource('songs', 'App\Http\Controllers\songsController');
Route::resource('playlist', 'App\Http\Controllers\playlistController');