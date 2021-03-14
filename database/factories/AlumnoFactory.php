<?php

namespace Database\Factories;

use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlumnoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alumno::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //Los valores que queremos generar para cada Alumno:
            'nombre' => $this->faker->name,
            'dni' => $this->faker->dni,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber
        ];
    }
}
