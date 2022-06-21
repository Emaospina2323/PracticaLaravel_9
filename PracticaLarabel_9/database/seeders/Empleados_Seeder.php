<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

    DB::table('empleados')->insert([
        'nombre'=> 'Dony Cardenas',
        'email' => 'cardenasdonny@gmail.com',
        'direccion' => 'calle 123456',
        'edad' => 36,
        'idCargo' => 1
    ]);

    DB::table('empleados')->insert([
        'nombre'=> 'Carlos',
        'email' => 'carlospardo@gmail.com',
        'direccion' => 'calle 67a',
        'edad' => 40,
        'idCargo' => 2
    ]);
    
    DB::table('empleados')->insert([
        'nombre'=> 'olivia',
        'email' => 'oliviaperea@gmail.com',
        'direccion' => 'calle 34a',
        'edad' => 50,
        'idCargo' => 3
    ]);

}
}
