<?php

namespace Database\Seeders;

use App\Models\Carrinho;
use Illuminate\Database\Seeder;

class CarrinhoSeeder extends Seeder
{
    /**
     * Run the seeder.
     */
    public function run(): void
    {
        Carrinho::create([
            'quantidade' => "2",
            'produto_id' => "2",
            'user_id' => "1",
        ]);
    }
}
