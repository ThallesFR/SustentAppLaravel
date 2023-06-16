<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Cozinha modulada',
                'valor' => 800.00,
                'ambiente' => 'Cozinha'
            ],
            [
                'nome' => 'Mesa retrátil',
                'valor' => 3500.00,
                'ambiente' => 'Cozinha'
            ],
            [
                'nome' => 'Sofá livros',
                'valor' => 1000.00,
                'ambiente' => 'Sala'
            ],
            [
                'nome' => 'Mesa pallet',
                'valor' => 500.00,
                'ambiente' => 'Sala'
            ],
            [
                'nome' => 'Cama de pinho',
                'valor' => 1500.00,
                'ambiente' => 'Quarto'
            ],
            [
                'nome' => 'Guarda roupas',
                'valor' => 3500.00,
                'ambiente' => 'Quarto'
            ],
            [
                'nome' => 'Poltronas tonel',
                'valor' => 3450.90,
                'ambiente' => 'Varanda'
            ],
            [
                'nome' => 'Sofá processado',
                'valor' => 1499.99,
                'ambiente' => 'Varanda'
            ]
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
