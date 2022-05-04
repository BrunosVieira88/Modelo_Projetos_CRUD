<?php
namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function retornaIndex(){

        $resultado = Produto::all();
        return view('index',compact('resultado'));
    }

    public function guardarAtriz(Request $request){
     
       
        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('/produto');
            $atriz = Produto::create($request->all());
            $atriz->foto = $foto; 
            $atriz->save();
            return view('/Produtos/cadastro',compact('atriz'));
        }
        $ERRO ='NÃO FOI POSSIVEL CADASTRAR';
        return view('/Produtos/cadastro',compact('ERRO'));
       

       
    }

    public function deletarProduto(Request $request){
             Produto::destroy($request->id);
             $resultado = Produto::all();
             $msg = "Produto deletado com Sucesso!";
            return view('index',compact('resultado','msg'));
    }

    public function editaProduto(int $id, Request $request)
    {
        $produto = Produto::find($id);
        $preco = $request->preco;
        $produto->preco = $preco;
        $nome = $request->nome;
        $produto->nome = $nome;
        $descricao = $request->descricao;
        $produto->descricao = $descricao;

        $produto->save();
        $resultado = Produto::all();
        $msg = "Produto Editado com Sucesso!";
        return view('index',compact('resultado','msg'));
    }
}