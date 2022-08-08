<?php

namespace Database\Seeders;
use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
$rol = new Rol();
$rol->nombre = "admin";
$rol->permisos_id = "4";
$rol->save();

$rol2 = new Rol();
$rol2->nombre = "User";
$rol2->permisos_id = "1";
$rol2->save();


    }
}
