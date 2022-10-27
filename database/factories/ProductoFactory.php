<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Negocio;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
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
            'nombre' => fake()->name(),
            'precio' => fake()->randomFloat(2,10,500),
            'descripcion' => fake()->text(),
            'calificacion'=> fake()->randomDigit(),
            'stock'=> fake()->randomDigit(),
            'imagen'=> $this->faker->imageUrl(),
            'status_id' => Status::all()->random()->id,
            'negocios_id' => Negocio::all()->random()->id,
            'categorias_id' => Categoria::where('tipo_cat','producto')->get()->random()->id
        ];
    }
}
