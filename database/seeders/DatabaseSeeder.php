<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Categoria;
use App\Models\Empleado;
use App\Models\Dia;
use App\Models\Horario;
use App\Models\Negocio;
use App\Models\Rol;
use App\Models\Status;
use App\Models\Producto;
use App\Models\RolHasUsuario;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Storage::deleteDirectory('productos');
        Storage::makeDirectory('productos');

        Status::factory(10)->create();
        Dia::factory(10)->create();
        Categoria::factory(10)->create();
        User::factory(10)->create();
        Rol::factory(10)->create();
        RolHasUsuario::factory(10)->create();
        Negocio::factory(10)->create();
        Producto::factory(10)->create();
        Horario::factory(10)->create();
        Empleado::factory(10)->create();

        $this->call([
            PedidoSeeder::class
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
