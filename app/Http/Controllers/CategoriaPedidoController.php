<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaPedidoController extends Controller
{
    public function create(){
        return view('categoriapedido');
    }
}
