<?php

namespace Database\Factories;

use App\Models\Rol;
use App\Models\RolHasUsuario;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rol_has_Usuario>
 */
class RolHasUsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = RolHasUsuario::class;
    public function definition()
    {
        return [
            //
            'roles_id' => Rol::all()->random()->id,
            'usuarios_id' => User::all()->random()->id
        ];
    }
}
