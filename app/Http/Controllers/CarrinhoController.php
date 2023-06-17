<?php
namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
/////////// load page/ verificação de user
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



    public function deleteAll()
    {
        Carrinho::where('user_id', auth()->user()->id)->delete();

        return response()->json(['success' => true]);
    }



    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Carrinho::where('user_id', auth()->user()->id)->find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }



    public function cadastrarItem(Request $request)
    {
        $produto_id = $request->produto_id;
        $numeroItensIguais = Carrinho::where('produto_id', $produto_id)->count();

        if ($numeroItensIguais != 0) {

            return redirect()->route('carrinho')->with('error', 'Intem já adicionado ao carrinho');
        }

        $data = $request->all();
        Carrinho::create($data);

        return redirect()->route('carrinho');
    }

    public function quantidadeItem(Request $request,$id)
    {
        $data = $request ->all();

        $id = $request->id;
        $buscaRegistro = Carrinho::where('user_id', auth()->user()->id)->find($id);
        $buscaRegistro->update($data);


        return redirect()->route('carrinho');
    }
}
