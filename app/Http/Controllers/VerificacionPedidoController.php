<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerificacionPedidoController extends Controller
{

    public function index(){
        return view('index.');
    }


    public function create(){
        return view('verificacionpedido');
    }
}
