<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'evento';

    /**
     * Run the migrations.
     * @table evento
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idEvento');
            $table->text('nombre');
            $table->text('descripcion');
            $table->date('fechaInicio');
            $table->date('fechaFin');
            $table->text('ubicacion');
            $table->string('departamento', 100);
            $table->string('municipio', 100);
            $table->integer('horas_curso');
            $table->string('modalidad', 100);
            $table->string('tipo_costo', 100);
            $table->double('costo');
            $table->integer('cantParticipante');
            $table->integer('cantEvaluaciones');
            $table->integer('contrato');
            $table->integer('ordenCompra');
            $table->integer('compraBolsa');
            $table->integer('item');
            $table->string('programa',100);
            $table->string('facilitador',100);
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
