<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
///////////////////////////////////////// load page ///////////////////////////
    public function cadastro()
    {
        return view('pages.cadastro');
    }


////////////////////////////////////cadastro de user ///////////////////////////////////////////////////////////
    public function cadastrarUser(Request $request)
    {
        $CPF = $request->CPF;
        $email = $request->email;

        $user = User::where('CPF', $CPF)->orWhere('email', $email)->first();

        if ($user) {
            return redirect()->route('cadastro')->with('error', 'CPF ou e-mail já cadastrados');
        }

        $data = $request->all();
        $data['password'] = Hash::make($data['password']); // Aplicar o hash na senha

        User::create($data);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso');
    }

/////////////////////////////////////// login e autenticação de user na seção //////////////////////////
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
//////////////////////////////////////////////////////////// logout /////////////////////////////////////
    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }

}
