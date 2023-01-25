<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contribuyentes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tipo_dni_id');   
            $table->foreign('tipo_dni_id')->references('id')->on('tipo_dnis');
                        
            $table->bigInteger('nro_documento');

            $table->unsignedBigInteger('estado_civil_id');   //id del estado civil que pertenece el contribuyente
            $table->foreign('estado_civil_id')->references('id')->on('estado_civils');  //la columna estadoCivil_id de contribuyente
            // hace referencia a la columna id de la tabla estado_civil

            $table->bigInteger('cuit');
            $table->string('ingresos_brutos');
            $table->string('nombre');
            $table->string('apellido');
            $table->date('fecha_nacimiento');
            $table->bigInteger('telefono')->nullable();
            $table->string('conyuge')->nullable();
            $table->integer('dni_conyuge')->nullable();
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
        Schema::dropIfExists('contribuyentes');
    }
};
