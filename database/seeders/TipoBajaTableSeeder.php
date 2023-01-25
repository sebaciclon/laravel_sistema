<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tipo_baja;

class TipoBajaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipo1 = new tipo_baja();
        $tipo1->descripcion = "provisoria";
        $tipo1->save();

        $tipo2 = new tipo_baja();
        $tipo2->descripcion = "definitiva";
        $tipo2->save();

        
    }
}
