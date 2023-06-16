<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'celular',
        'nascimento',
        'password',
        'CPF',
        'CEP',
        'UF',
        'cidade',
        'bairro',
        'rua',
        'numero',
        'complemento',
    ];

    // Restante do código do modelo...
}
