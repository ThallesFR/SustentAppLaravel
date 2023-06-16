<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cadastro()
    {
        return view('pages.cadastro');
    }



    public function cadastrarUser(Request $request)
    {
        $CPF = $request->CPF;
        $email = $request->email;

        $user = User::where('CPF', $CPF)->orWhere('email', $email)->first();

        if ($user) {
            return redirect()->route('cadastro')->with('error', 'CPF ou e-mail já cadastrados');
        }

        $data = $request->all();
        User::create($data);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso');
    }


}
