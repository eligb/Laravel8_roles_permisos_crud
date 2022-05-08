<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id();
            $table->string('ci')->nullable(false);
            $table->string('nombre')->nullable(false);
            $table->string('correo')->unique();
            $table->string('numero');
            $table->string('ruta')->nullable(false);
            $table->string('nombrebanco')->nullable(false);
            $table->double('numero_cuenta',$precision=20)->nullable(false);
            $table->string('t_cuenta')->nullable(false);
            $table->string('area');
            $table->string('cargo');
            $table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
