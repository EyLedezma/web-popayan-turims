<?php

namespace Database\Seeders;
use App\Models\Ruta;
use Illuminate\Database\Seeder;

class RutasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ruta = new Ruta();
         $ruta->ubicasion = "prueba";
         $ruta->horarios = "Todo el dia";
         $ruta->descripcion = "prueba";
         $ruta->mapas_id = "1";
        $ruta->save();
 
    }
}
