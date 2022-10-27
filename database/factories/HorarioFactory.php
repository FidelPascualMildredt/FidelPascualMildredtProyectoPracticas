<?php

namespace Database\Factories;

use App\Models\Dia;
use App\Models\Negocio;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'negocios_id'=> Negocio::all()->random()->id,
            'dias_id'=> Dia::all()->random()->id,
            'hora_inicio'=>fake()->time($format = 'H:i:s', $max = 'now'),
            'hora_final'=>fake()->time($format = 'H:i:s', $max = 'now')

        ];
    }
}
