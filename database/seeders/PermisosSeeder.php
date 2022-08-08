<?php

namespace Database\Seeders;
use App\Models\Permiso;

use Illuminate\Database\Seeder;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permiso = new Permiso();
$permiso->nombre = "crear";
$permiso->save();

$permiso2= new Permiso();
$permiso2->nombre = "eliminar";
$permiso2->save();

$permiso3= new Permiso();
$permiso3->nombre = "editar";
$permiso3->save();

$permiso4= new Permiso();
$permiso4->nombre = "todos los permisos";
$permiso4->save();

    }
}
