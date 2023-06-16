<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

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


    public function carrinho()
{
    return $this->hasOne(Carrinho::class);
}

}
