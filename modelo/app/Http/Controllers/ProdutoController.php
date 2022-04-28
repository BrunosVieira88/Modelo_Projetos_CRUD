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

    public function retornaView(){

        $resultado = Produto::all();
        return view('/Produtos/cadastro');

    }
    public function retornaIndex(){

        $resultado = Produto::all();
        return view('index',compact('resultado'));
    }

    public function guardarAtriz(Request $request){
     
       
        if($request->hasFile('foto')){
            $foto = $request->file('foto')->store('/public/produto');
            $atriz = Produto::create($request->all());
            $atriz->foto = $foto; 
            $atriz->save();
            return view('/Produtos/cadastro',compact('atriz'));
        }
        $ERRO ='NÃO FOI POSSIVEL CADASTRAR';
        return view('/Produtos/cadastro',compact('ERRO'));
       

       
    }
}