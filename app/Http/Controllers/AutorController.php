<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Autor;

class AutorController extends Controller
{
    public function index(){
        $autors = Autor::all();
        // return $autors;
        return view('autors.index', compact('autors'));
    }

    public function show(Autor $autor){
        return view('autors.show', compact('autor'));
    }
}
