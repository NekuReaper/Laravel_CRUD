<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alumno;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Tras crear un factory para Alumno...
        //La siguiente línea va a ejecutar la factoria 10 veces:
        Alumno::factory()->count(10)->create();
    }
}
