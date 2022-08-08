<?php

namespace Database\Seeders;
use App\Models\Tipoplato;
use Illuminate\Database\Seeder;

class TipoPlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipoplato = new Tipoplato();
        $tipoplato->nombre = "Tipico";
        $tipoplato->save();
        
    }
}
