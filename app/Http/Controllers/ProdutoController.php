<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //

    public function listar(){
        return View('home');
    }
    public function adicionar(){
        return View('adicionar');
    }
}
