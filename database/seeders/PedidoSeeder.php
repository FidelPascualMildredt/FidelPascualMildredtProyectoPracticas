<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetallePedido;
use App\Models\Pedido;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pedidos = Pedido::factory(10)->create();
        foreach ($pedidos as $pedido) {
            $detalleCount = rand(2,7);
            DetallePedido::factory($detalleCount)->create([
                'pedidos_id' => $pedido->id,
            ]);
        }
    }
}
