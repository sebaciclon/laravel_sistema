<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipo_habilitacion;

class TipoHabilitacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new tipo_habilitacion();
        $tipo1->descripcion = "provisoria";
        $tipo1->save();

        $tipo2 = new tipo_habilitacion();
        $tipo2->descripcion = "permanente";
        $tipo2->save();

        $tipo3 = new tipo_habilitacion();
        $tipo3->descripcion = "en tramite";
        $tipo3->save();
    }
}
