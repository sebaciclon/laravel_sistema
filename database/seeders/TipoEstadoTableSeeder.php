<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipo_estado;

class TipoEstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new tipo_estado();
        $tipo1->descripcion = "estadoA";
        $tipo1->save();

        $tipo2 = new tipo_estado();
        $tipo2->descripcion = "estadoB";
        $tipo2->save();

        $tipo3 = new tipo_estado();
        $tipo3->descripcion = "estadoC";
        $tipo3->save();

        $tipo4 = new tipo_estado();
        $tipo4->descripcion = "estadoD";
        $tipo4->save();
    }
}
