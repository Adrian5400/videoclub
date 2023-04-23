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
}
