<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome' => 'John Doe',
            'email' => 'johndoe@example.com',
            'celular' => '12345678*Sed',
            'nascimento' => '1990-01-01',
            'password' => Hash::make('password'),
            'CPF' => '123456789',
            'CEP' => '12345-678',
            'UF' => 'SP',
            'cidade' => 'São Paulo',
            'bairro' => 'Centro',
            'rua' => 'Rua Principal',
            'numero' => '123',
            'complemento' => 'Apartmento 456',
        ]);

        // Adicione mais registros de usuário conforme necessário
    }
}
