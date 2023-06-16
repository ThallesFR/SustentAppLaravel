<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{




    public function cadastrarPedido(Request $request)
    {
        $valor = $request->input('valor');
        $user_id = $request->input('user_id');

        Pedidos::create([
            'valor' => $valor,
            'user_id' => $user_id,
        ]);

        Carrinho::where('user_id', $user_id)->delete();

        return redirect()->route('perfil');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Pedidos::where('user_id', auth()->user()->id)->find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }







}
