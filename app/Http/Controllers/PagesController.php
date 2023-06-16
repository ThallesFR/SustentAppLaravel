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
        return view('pages.info');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function perfil()
    {
        return view('pages.perfil');
    }


}

