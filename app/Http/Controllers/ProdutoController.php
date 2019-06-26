<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use App\Produto;
use App\Categoria;
use App\Http\Requests\ProdutoRequest;
use Auth;

class ProdutoController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth', [ 'only' => ['remove', 'adiciona'] ]);
    }

    public function lista()
    {

        $produtos = Produto::all();
        
        return view('produto.listagem')->with('produtos', $produtos);       
    }

    public function mostra($id)
    {
        $produto = Produto::find($id);
        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);    
    }

    public function novo()
    {        
        return view('produto.formulario')->with('categorias', Categoria::all());      
    }

    public function adiciona(ProdutoRequest $request)
    {

        if (Request::input('id')) {
            Produto::find(Request::input('id'))->update(Request::all()); // modo simplificado            
        } else {
            Produto::create($request->all()); // modo simplificado
        }

        return redirect()->action('ProdutoController@lista')->withInput(Request::only('nome')); // envia o parâmetro para a próxima requisição
    }

    public function edita($id)
    {
        $produto = Produto::find($id);

        return view('produto.formulario')->with('p', $produto)->with('categorias', Categoria::all()); // envia o parâmetro para a próxima requisição
    }

    public function remove($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@lista');
    }

    public function listaJson()
    {
        $produtos = DB::select('select * from produtos');
        return $produtos;
    }
}
 