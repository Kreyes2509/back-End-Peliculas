<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function index()
    {
        $Categories = Categorias::all();

        return response()->json($Categories);
    }
}
