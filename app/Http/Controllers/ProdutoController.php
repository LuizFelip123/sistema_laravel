<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoAdicionarRequest;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //

    public function listar(){
        $produtos = Produto::all();
        return View('home', ['produtos'=> $produtos ]);
    }
    public function adicionar(){
      
        return View('adicionar');
    }
    public function salvar(ProdutoAdicionarRequest $request){
        if($request['disponivel']){
            $request['disponivel'] = true;
        }else{
            $request['disponivel'] = false;
        }
        Produto::create($request->all());
        return redirect('/');
    }
    public function excluir($id){
        Produto::findOrFail($id)->delete();
        return redirect('/');
    }
    public function editar($id){
       $produto = Produto::findOrFail($id);
        return view('editar', ['produto'=> $produto]);
    }
    public function atualizar($id, Request $request){
        if($request['disponivel']){
            $request['disponivel'] = true;
        }else{
            $request['disponivel'] = false;
        }
        $produto = Produto::findOrFail($id)->update($request->all());
        return redirect('/');
    }
}
