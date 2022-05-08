<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Asistencias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('asistencias', function (Blueprint $table) {
        $table->engine="InnoDB";
        $table->id();
        $table->bigInteger('empleados_id')->unsigned();
        $table->date_time_set();
    }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
