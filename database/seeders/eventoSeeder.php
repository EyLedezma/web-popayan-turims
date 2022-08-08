<?php

namespace Database\Seeders;
use App\Models\Evento;
use Illuminate\Database\Seeder;

class eventoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $evento = new Evento();
        $evento->nombre = "cultural";
        $evento->ubucasion = "popayan";
		$evento->horarios = "todo el dia";
		$evento->fechainicio = "hoy";
		$evento->fechafin = "mañana";
		$evento->tipoeventos_id = "1";
        $evento->save();

        $evento1 = new Evento();
        $evento1->nombre = "cultural";
        $evento1->ubucasion = "popayan";
		$evento1->horarios = "todo el dia";
		$evento1->fechainicio = "hoy";
		$evento1->fechafin = "mañana";
		$evento1->tipoeventos_id = "1";
        $evento1->save();

         $evento2 = new Evento();
        $evento2->nombre = "cultural";
        $evento2->ubucasion = "popayan";
		$evento2->horarios = "todo el dia";
		$evento2->fechainicio = "hoy";
		$evento2->fechafin = "mañana";
		$evento2->tipoeventos_id = "1";
        $evento2->save();

        
    }
}
