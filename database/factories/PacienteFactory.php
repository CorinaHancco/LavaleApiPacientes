<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $paciente = Paciente::class;
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name(),
            'apellido'=>$this->faker->lastName(),
            'edad'=>$this->faker->numberBetween($min=18, $max=90),
            'tipo_sangre'=>$this->faker->randomElement(['A+','O-']),
            'enfermedad'=>$this->faker->sentence(20),

        ];
    }
}
