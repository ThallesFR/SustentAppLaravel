<?php

namespace Database\Seeders;

use App\Models\Pedidos;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    public function run()
    {
        Pedidos::create([
            'valor' => 100.00,
            'user_id' => 1,
        ]);

    }
}
