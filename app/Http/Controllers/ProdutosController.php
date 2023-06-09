<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
///////////////////////////////////////////// load page ambiente dos produtos definidos pelo tipo de ambiente///////////////////////
    public function ambiente($ambiente)
    {
        $findProduto = Produto::where('ambiente', $ambiente)->get();
        return view('pages.produtos.produtos', compact('findProduto'));
    }

///////////////////////////////////////////// load page movel do produto pelo seu id para ////////////////////////////
    public function movel($ambiente, $movel)//variaveis  $ambiente e $movel setadas em web.route
    {   if (auth()->check())
        {
            $produto = Produto::where('ambiente', $ambiente)->where('nome', $movel)->first();//quando as variáveis forem iguais ao campo do banco pegue o primeiro elemento
            return view('pages.produtos.movel', compact('produto'));
        }
        return redirect()->route('login')->with('success', 'Logue para poder comprar');

    }


}
