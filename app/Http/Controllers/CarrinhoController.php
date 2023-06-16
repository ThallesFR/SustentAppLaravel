<?php
namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function page()
    {
        $findCarrinho = Carrinho::all();
        $numeroItens = Carrinho::count();

        return view('pages.carrinho', compact('findCarrinho', 'numeroItens'));
    }


    public function deleteAll()
{
    Carrinho::truncate();

    return response()->json(['success' => true]);
}


    public function delete(Request $request)
    {
        $id = $request->id;
        $buscaRegistro = Carrinho::find($id);
        $buscaRegistro->delete();

        return response()->json(['success' => true]);
    }



    public function cadastrarItem(Request $request)
    {
        $produto_id = $request->produto_id;
        $numeroItensIguais = Carrinho::where('produto_id', $produto_id)->count();

        if ($numeroItensIguais != 0) {
            
            return redirect()->route('carrinho');
        }

        $data = $request->all();
        Carrinho::create($data);

        return redirect()->route('carrinho');
    }

    public function quantidadeItem(Request $request,$id)
    {
        $data = $request ->all();

        $id = $request->id;
        $buscaRegistro = Carrinho::find($id);
        $buscaRegistro->update($data);


        return redirect()->route('carrinho');
    }
}
