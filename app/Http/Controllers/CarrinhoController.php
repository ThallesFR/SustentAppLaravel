<?php
namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
/////////// load page/ verificação de user/////////////////////////////////////////////////////////
    public function page()
    {
        if (auth()->check())
        {
            $findCarrinho = Carrinho::where('user_id', auth()->user()->id)->get();
            $numeroItens = $findCarrinho->count();
        return view('pages.carrinho', compact('findCarrinho', 'numeroItens'));
        }
        return redirect()->route('login')->with('success', 'Logue para poder comprar');
    }


//////////////////////////////////////////// esvaziar o carrinho por completo ///////////////////////////////////
    public function deleteAll()
    {
        Carrinho::where('user_id', auth()->user()->id)->delete();

        return response()->json(['success' => true]);
    }


//////////////////////////////////////////// deletar item individualmente  ///////////////////////////////////////////////
    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Carrinho::where('user_id', auth()->user()->id)->find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }


////////////////// cadastro de itens no carrinho ////////////////////////
    public function cadastrarItem(Request $request)
    {
        $produto_id = $request->produto_id;

        // 'Carrinho::where('user_id', auth()->user()->id)' esta chamando o modelo Carrinho filtrado pelo user id auth.
        //"->where('produto_id', $produto_id)" está filtrando o modelo Carrinho filtrado anteriormente pela variável $produto_id pega na $request.
        $numeroItensIguais = Carrinho::where('user_id', auth()->user()->id)->where('produto_id', $produto_id)->count();

        if ($numeroItensIguais != 0) {
            return redirect()->route('carrinho')->with('error', 'Item já adicionado ao carrinho');
        }

        $data = $request->all();
        Carrinho::create($data);

        return redirect()->route('carrinho');
    }
//////////////////////////////// editar quantidade de itens com mesmo id de produto no carrinho ///////////////////////////////////////////////////
    public function quantidadeItem(Request $request,$id)
    {
        $data = $request ->all();

        $id = $request->id;
        $buscaRegistro = Carrinho::where('user_id', auth()->user()->id)->find($id);
        $buscaRegistro->update($data);


        return redirect()->route('carrinho');
    }
}
