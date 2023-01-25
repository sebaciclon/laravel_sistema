<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipo_inmueble;

class TipoInmuebleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new tipo_inmueble();
        $tipo1->descripcion = "inmueble A";
        $tipo1->save();

        $tipo2 = new tipo_inmueble();
        $tipo2->descripcion = "inmueble B";
        $tipo2->save();

        $tipo3 = new tipo_inmueble();
        $tipo3->descripcion = "inmueble C";
        $tipo3->save();

        $tipo4 = new tipo_inmueble();
        $tipo4->descripcion = "inmueble D";
        $tipo4->save();
    }
}
