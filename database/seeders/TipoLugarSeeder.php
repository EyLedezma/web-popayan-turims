<?php

namespace Database\Seeders;
use App\Models\Tipolugar;
use Illuminate\Database\Seeder;

class TipoLugarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$tipolugar = new Tipolugar();
$tipolugar->nombre = "iglesias";
$tipolugar->descripcion = "lugares religios ";
$tipolugar->save();

$tipolugar2 = new Tipolugar();
$tipolugar2->nombre = "senderismo";
$tipolugar2->descripcion = "actividad recreativa ";
$tipolugar2->save();

$tipolugar3 = new Tipolugar();
$tipolugar3->nombre = "museos";
$tipolugar3->descripcion = "lugares recreativos  ";
$tipolugar3->save();

$tipolugar4 = new Tipolugar();
$tipolugar4->nombre = "hoteles";
$tipolugar4->descripcion = "lugares religios ";
$tipolugar4->save();

$tipolugar5 = new Tipolugar();
$tipolugar5->nombre = "restaurantes";
$tipolugar5->descripcion = "actividad recreativa ";
$tipolugar5->save();



  }
}
 