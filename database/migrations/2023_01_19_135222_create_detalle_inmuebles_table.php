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
        Schema::create('detalle_inmuebles', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('inmueble_id');   
            $table->foreign('inmueble_id')->references('id')->on('inmuebles');
            
            $table->unsignedBigInteger('tipo_inmueble_id');   
            $table->foreign('tipo_inmueble_id')->references('id')->on('tipo_inmuebles');  
            
            $table->date('fecha_venc_alquiler');
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
        Schema::dropIfExists('detalle_inmuebles');
    }
};
