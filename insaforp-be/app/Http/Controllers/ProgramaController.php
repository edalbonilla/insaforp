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

    public function show($id){

        $programa = Programa::findOrFail($id);
        
        return $programa;
    }

    public function update(Request $request, $id){

        $programa = Programa::findOrFail($id)
        ->update($request->all());
        
        return $programa;
    }

    public function destroy($id){

        Programa::destroy($id);
        
        return response("Programa Eliminado");                
    }
}
