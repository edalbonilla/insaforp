<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CalendarizacionEvento extends Model
{
    //
    protected $table = 'calendarizacionevento';
    protected $primaryKey = 'idCE';
    protected $fillable = ["idEvento",
                            "diaEvento",
                            "horaInicio",
                            "horaFinal"];
}
