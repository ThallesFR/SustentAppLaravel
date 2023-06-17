<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
///////////////////// load page/ envio de variáveis de pedidos ///////
    public function perfil()
    {
        $findPedidos = Pedidos::where('user_id', auth()->user()->id)->get();
            $numeroPedidos = $findPedidos->count();
        return view('pages.perfil',compact('findPedidos', 'numeroPedidos'));
    }
}
