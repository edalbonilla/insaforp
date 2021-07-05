<?php

namespace App\Http\Controllers;

use App\Programa;
use Illuminate\Http\Request;

class ProgramaController extends Controller
{
    //
    public function index(){

        $programa = Programa::all();       

        return $programa;

    }

    public function create(Request $request){        

    }

    public function store(Request $request){

        $programa = Programa::create(['Nombre'=>$request->Nombre,
                                        'Descripcion'=>$request->Descripcion]);
        
        return $programa;
    }
}
