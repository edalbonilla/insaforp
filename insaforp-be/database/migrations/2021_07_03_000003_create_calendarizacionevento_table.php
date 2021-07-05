<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalendarizacioneventoTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'calendarizacionevento';

    /**
     * Run the migrations.
     * @table calendarizacionevento
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('idCE');
            $table->integer('idEvento')->unsigned();
            $table->date('diaEvento');
            $table->time('horaInicio');
            $table->time('horaFinal');
            $table->timestamps();

            $table->index(["idEvento"], 'idxEvemto_calendarizacion');


            $table->foreign('idEvento', 'idxEvemto_calendarizacion')
                ->references('idEvento')->on('evento')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
