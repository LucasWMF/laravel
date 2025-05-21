<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel; //importar cliente do model !important

class ClienteController extends Controller
{
    function add() {
        return view('add-cliente');
    }

    function store(Request $dados){
        // Request = receber a requisição e determinar a variável que será postado os dados
        // dd($dados->all());
        // modo de teste
        $cliente = new ClienteModel();
        $cliente->create($dados->all());
    }
}
