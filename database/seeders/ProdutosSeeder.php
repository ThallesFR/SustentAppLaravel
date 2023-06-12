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
                'nomeProduto' => 'Cozinha modulada',
                'valorProduto' => '800.00',
                'ambienteProduto' => 'Cozinha'
            ],
            [
                'nomeProduto' => 'Mesa retrátil',
                'valorProduto' => '3500.00',
                'ambienteProduto' => 'Cozinha'
            ],
            [
                'nomeProduto' => 'Sofá livros',
                'valorProduto' => '1000.00',
                'ambienteProduto' => 'Sala'
            ],
            [
                'nomeProduto' => 'Mesa pallet',
                'valorProduto' => '500.00',
                'ambienteProduto' => 'Sala'
            ],
            [
                'nomeProduto' => 'Cama de pinho',
                'valorProduto' => '1500.00',
                'ambienteProduto' => 'Quarto'
            ],
            [
                'nomeProduto' => 'Guarda roupas',
                'valorProduto' => '3500.00',
                'ambienteProduto' => 'Quarto'
            ],
            [
                'nomeProduto' => 'Poltronas tonel',
                'valorProduto' => '3450.90',
                'ambienteProduto' => 'Varanda'
            ],
            [
                'nomeProduto' => 'Sofá processado',
                'valorProduto' => '1499.99',
                'ambienteProduto' => 'Varanda'
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
