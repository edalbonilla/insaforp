<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docente extends Model
{
    //
    protected $table = 'docentes';
    protected $primaryKey = 'idDocente';
    protected $fillable = ["Nombre"];
    
}
