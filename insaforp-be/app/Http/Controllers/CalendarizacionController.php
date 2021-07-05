<?php

namespace App\Http\Controllers;

use App\CalendarizacionEvento;
use Illuminate\Http\Request;

class CalendarizacionController extends Controller
{
    //
    public function index(){

        $calendarizacion = CalendarizacionEvento::all();        
        return $calendarizacion;

    }

    public function create(Request $request){        

    }

    public function store(Request $request){

        $calendarizacion = CalendarizacionEvento::create(['idEvento'=>$request->idEvento,
                                                          'diaEvento'=>$request->diaEvento,
                                                          'horaInicio'=>$request->horaInicio,
                                                          'horaFinal'=>$request->horaFinal
                                                          ]);
        
        return $calendarizacion;
    }
}
