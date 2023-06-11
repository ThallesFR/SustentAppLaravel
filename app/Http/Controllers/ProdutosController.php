<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function ambiente($ambiente)
    {
        $findProduto = Produto::where('ambienteProduto', $ambiente)->get();
        return view('pages.produtos.produtos', compact('findProduto'));
    }

    public function movel($ambiente, $movel)
    {
        $produto = Produto::where('ambienteProduto', $ambiente)->where('nomeProduto', $movel)->first();
        return view('pages.produtos.movel', compact('produto'));
    }
}
