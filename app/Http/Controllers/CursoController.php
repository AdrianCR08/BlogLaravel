<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Al metodo encargado de mostrar la pagina principal se le suele llamar index
    public function index (){
        return view('cursos.index');
    }

    // Al método encargado de mostrar el formulario para crear un curso se llama create
    public function create(){
        return view('cursos.create');
    }

    // Al metodo encargado de mostrar un elemento en particular se le suele llamar show
    public function show($curso){
        //compact('curso'); // ['curso' => $curso]
        return view('cursos.show', compact('curso'));
    }

}
