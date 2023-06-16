<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

     protected $fillable = [
        'quantidade',
        'produto_id',
        'user_id'

    ];

    public function produto()
{
    return $this->belongsTo(Produto::class);

}

public function user()
{
    return $this->belongsTo(User::class);

}

}
