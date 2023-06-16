<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{



    ////////////////////////////////////cadastro
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


    /////////////////////////////////////login e autenticação
    public function login()
    {
        return view('pages.login');
    }

    public function auth (Request $request){
        $this->validate($request,[
            'email'=> 'required',
            'password'=>'required',
        ],[
            'email.required'=>'E-mail é obrigatório',
            'password'=>'Senha é obrigatória'
        ]);

       if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->intended('/');
       }
       return redirect()->back()->with('error_login', 'Senha ou email inválidos');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }


}
