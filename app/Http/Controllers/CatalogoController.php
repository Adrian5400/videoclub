<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index()
    {
        $films = Film::all();
        
        return view('catalogo.index', compact('films'));
    } 

    public function show($id)
    {
        $film = Film::find($id);
        return view('catalogo.show', compact('film'));
    }

    public function rent(Film $film) {
        $film->rented = 1;
        $film->save();
        return redirect()->route('catalogo.show', $film);
    }

    public function rent2(Film $film) {
        $film->rented = 0;
        $film->save();
        return redirect()->route('catalogo.show', $film);
    }
}
