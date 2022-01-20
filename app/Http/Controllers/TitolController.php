<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Titol;
use App\Models\Autor;

class TitolController extends Controller
{
    public function index(){
        $titols=Titol::all();
        // return view('titols.index', compact(titols));
        return response()->json($titols, 200);
        return $titols;
    }

    public function show(Titol $titol){
        return response()->json($titol, 200);
        return $titol;
    }

    public function create(){
        return view('titols.create');
    }

    public function store(Request $request){
        $titol=Titol::create($request->all());
        // $titol=Titol::create(['title'=>$request->title, 'autor_id'=>$request->autor_id, 'edition_year'=>$request->edition_year]);
        return response()->json($titol, 200);
        // $titol=new Titol;
        // $titol->title='Titol 1';
        // $titol->autor_id=Autor::get()->random()->id;
        // $titol->save();
        // return [$titol, $titol->autor->name];
        // return $titol;
    }

    public function edit(Titol $titol){
        return view('titols.edit');
    }

    public function update(Titol $titol, Request $request){
        $titol->update($request->all());
        return response()->json($titol, 200);
    }

    public function delete(Titol $titol){
        $titol->delete();
        // return response()->json($titol, 200);
        return $titol;
    }
}
