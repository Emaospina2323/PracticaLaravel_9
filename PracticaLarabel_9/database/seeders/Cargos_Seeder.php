<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Cargos_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50)->unique();
            $table->timestamps();
        });
    }


    public function run()
    {
        DB::table('cargos')->insert([
            'nombre'=> 'Instructor',
        ]);
    
        DB::table('cargos')->insert([
            'nombre'=> 'Director',
        ]);
    
        DB::table('cargos')->insert([
            'nombre'=> 'Coordinador',
        ]);
    }
}

