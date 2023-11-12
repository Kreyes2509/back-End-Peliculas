<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directores;

class DirectoresController extends Controller
{
    public function index()
    {
        $Directors = Directores::all();

        return response()->json($Directors);
    }
}
