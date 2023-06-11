<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        return view('index');
    }


    public function info()
    {
        return view('info');
    }

    public function login()
    {
        return view('login');
    }

    public function cadastro()
    {
        return view('cadastro');
    }

    public function perfil()
    {
        return view('perfil');
    }
}
