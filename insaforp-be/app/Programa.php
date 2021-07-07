<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    //
    protected $table = 'programa';
    protected $primaryKey = 'idPrograma';
    protected $fillable = ["Nombre", "Descripcion"];
}
