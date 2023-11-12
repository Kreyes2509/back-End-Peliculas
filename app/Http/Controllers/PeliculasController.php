<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peliculas;

class PeliculasController extends Controller
{
    public function index()
    {
        $Movies = Peliculas::select("categorias.name as category","directores.name as director","peliculas.title",
                                    "peliculas.Duration","peliculas.Synopsis")
                            ->join("categorias","categorias.id","=","peliculas.CategoryID")
                            ->join("directores","directores.id","=","peliculas.DirectorID")
                            ->get();

        return response()->json($Movies);
    }
}
