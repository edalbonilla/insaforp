<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarizacionEvento extends Model
{
    //
    protected $table = 'calendarizacionevento';
    protected $fillable = ["idEvento",
                            "diaEvento",
                            "horaInicio",
                            "horaFinal"];
}
