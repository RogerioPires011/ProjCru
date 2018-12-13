<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::get();

        return view('clientes.lista',['clientes'=>$clientes]);
    }

    public function novo($id){
        $cliente = Cliente::find($id);
        return view('clientes.formulario', compact('cliente'));
    }

}
