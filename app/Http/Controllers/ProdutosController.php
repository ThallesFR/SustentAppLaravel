<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function ambiente($ambiente)
    {   
        $findProduto = Produto::where('ambiente', $ambiente)->get();
        return view('pages.produtos.produtos', compact('findProduto'));
    }


    public function movel($ambiente, $movel)//variaveis  $ambiente e $movel setadas em web.route
    {
        $produto = Produto::where('ambiente', $ambiente)->where('nome', $movel)->first();//quando as variáveis forem iguais ao campo do banco pegue o primeiro elemento
        //dd($produto);
        return view('pages.produtos.movel', compact('produto'));
    }


}
