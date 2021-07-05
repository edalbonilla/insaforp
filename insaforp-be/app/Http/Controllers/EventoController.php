<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    //
    public function index(){

        $evento = Evento::all();
        return $evento;

    }

    public function create(Request $request){

        $evento = Evento::created($request);
        return $evento;
    }

    public function store(Request $request){

        $evento = Evento::create(['nombre'=>$request->nombre,'descripcion'=>$request->descripcion,
                                 'fechaInicio'=>$request->fechaInicio,
                                 'fechaFin'=>$request->fechaFin,
                                 'ubicacion'=>$request->ubicacion,
                                 'departamento'=>$request->departamento,
                                 'municipio'=>$request->municipio,
                                 'horas_curso'=>$request->horas_curso,
                                 'modalidad'=>$request->modalidad,
                                 'tipo_costo'=>$request->tipo_costo,
                                 'costo'=>$request->costo,
                                 'cantParticipante'=>$request->cantParticipante,
                                 'cantEvaluaciones'=>$request->cantEvaluaciones,
                                 'contrato'=>$request->contrato,
                                 'ordenCompra'=>$request->ordenCompra,
                                 'compraBolsa'=>$request->compraBolsa,
                                 'item'=>$request->item,
                                 'programa'=>$request->programa,
                                 'facilitador'=>$request->facilitador
                                 ]);
        return $evento;
    }
}
