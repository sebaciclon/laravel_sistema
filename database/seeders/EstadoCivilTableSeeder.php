<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\estado_civil;

class EstadoCivilTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new estado_civil();
        $tipo1->descripcion = "soltero";
        $tipo1->save();

        $tipo2 = new estado_civil();
        $tipo2->descripcion = "casado";
        $tipo2->save();

        $tipo3 = new estado_civil();
        $tipo3->descripcion = "divorciado";
        $tipo3->save();

        $tipo4 = new estado_civil();
        $tipo4->descripcion = "viudo";
        $tipo4->save();
    }
}
