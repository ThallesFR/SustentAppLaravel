<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {   $findProduto = Produto::all();
        //dd($findProduto);
        return view('index', compact('findProduto'));
    }


    public function info()
    {
        return view('pages.info');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function cadastro()
    {
        return view('pages.cadastro');
    }

    public function perfil()
    {
        return view('pages.perfil');
    }

    public function carrinho()
    {
        return view('pages.carrinho');
    }
}

