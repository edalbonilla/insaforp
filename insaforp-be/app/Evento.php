<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    //
    protected $table = 'evento';
    protected $primaryKey = 'idEvento';
    protected $fillable = ["nombre",
                            "descripcion",
                            "fechaInicio",
                            "fechaFin",
                            "ubicacion",
                            "departamento",
                            "municipio",
                            "horas_curso",
                            "modalidad",
                            "tipo_costo",
                            "costo",
                            "cantParticipante",
                            "cantEvaluaciones",
                            "contrato",
                            "ordenCompra",
                            "compraBolsa",
                            "item",
                            "programa",
                            "facilitador"];
}
