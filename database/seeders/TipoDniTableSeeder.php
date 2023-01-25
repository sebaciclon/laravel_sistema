<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipo_dni;

class TipoDniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new tipo_dni();
        $tipo1->descripcion = "dni";
        $tipo1->save();

        $tipo2 = new tipo_dni();
        $tipo2->descripcion = "LC";
        $tipo2->save();

        $tipo3 = new tipo_dni();
        $tipo3->descripcion = "LE";
        $tipo3->save();

        $tipo4 = new tipo_dni();
        $tipo4->descripcion = "pasaporte";
        $tipo4->save();
    }
}
