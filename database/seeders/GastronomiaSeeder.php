<?php

namespace Database\Seeders;
use App\Models\Gastronomia;
use Illuminate\Database\Seeder;

class GastronomiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        $gastronomia= new Gastronomia();

     $gastronomia->ubicasion = "centro";
	 $gastronomia->descripcion = "rico ";
     $gastronomia->horarios = "7am 1pm";
	 $gastronomia->tipoplato_id = "1";
     $gastronomia->save();
     

    }
}
