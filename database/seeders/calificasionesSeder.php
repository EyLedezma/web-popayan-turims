<?php

namespace Database\Seeders;
use App\Models\Calificasione;
use Illuminate\Database\Seeder;

class calificasionesSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $calificasione = new Calificasione();
    $calificasione->comentarios ="es muy bueno";
    $calificasione->reseñas ="Bueno";
    $calificasione->save();


    $calificasione1 = new Calificasione();
    $calificasione1->comentarios ="es muy bueno";
    $calificasione1->reseñas ="Bueno";
    $calificasione1->save();


    $calificasione2 = new Calificasione();
    $calificasione2->comentarios ="malo";
    $calificasione2->reseñas ="Bueno";
    $calificasione->save();

    $calificasione3 = new Calificasione();
    $calificasione3->comentarios ="no me gusto";
    $calificasione3->reseñas ="Bueno";
    $calificasione3->save();


    $calificasione4 = new Calificasione();
    $calificasione4->comentarios ="maloo";
    $calificasione4->reseñas ="Bueno";
    $calificasione4->save();
    }
}
