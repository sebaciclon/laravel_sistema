<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipo_dependencia;

class TipoDependenciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new tipo_dependencia();
        $tipo1->nombre = "dependenciaA";
        $tipo1->save();

        $tipo2 = new tipo_dependencia();
        $tipo2->nombre = "dependenciaB";
        $tipo2->save();

        $tipo3 = new tipo_dependencia();
        $tipo3->nombre = "dependenciaC";
        $tipo3->save();

        $tipo4 = new tipo_dependencia();
        $tipo4->nombre = "dependenciaD";
        $tipo4->save();
    }
}
