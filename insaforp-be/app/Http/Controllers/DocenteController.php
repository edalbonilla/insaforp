<?php

namespace App\Http\Controllers;

use App\docente;
use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DocenteController extends Controller
{
    //

    public function index(){

        $docentes = docente::all();
        Log::info($docentes);

        return $docentes;

    }

    public function create(Request $request){        

    }

    public function store(Request $request){

        $docentes = docente::create(['Nombre'=>$request->Nombre]);
        Log::info($request);
        return $docentes;
    }

    public function show($id){

        $docentes = docente::findOrFail($id);
        
        return $docentes;
    }

    public function update(Request $request, $id){

        $docentes = docente::findOrFail($id)
        ->update($request->all());
        
        return $docentes;
    }

    public function destroy($idDocente){

        docente::destroy($idDocente);
        
        return response("Docente Eliminado");                
    }


}
