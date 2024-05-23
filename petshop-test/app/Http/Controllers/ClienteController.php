<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /*$req é a variável que guarda tds os valores que vêm da ultima tela em um vetor*/
    public function index(Request $req){
        $cliente = Cliente::all();
        return view('aparicao')->with("cliente", $cliente);
        
    }

    public function adicionar(Request $req){
        /** 
         * $(instancia)->(-> puxa uma variável do vetor) = $req-> (nome do input referente ao campo)
         *
         * $cliente->nome = $req->firstname
         * */
        $cliente = new Cliente;
        $cliente->nome = $req->first_name;
        $cliente->sobrenome = $req->last_name; 
        $cliente->email = $req->email;
        $cliente->telefone = $req->phone;
        $cliente->save();
        return redirect()->back();
    }

    public function editar(Request $req){
        $cliente = Cliente::find($req->id);
        return view('editar')->with("cliente", $cliente);
    }

    public function atualizar(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->update(
            [
                "nome" => $req->nome,
                "sobrenome" => $req->sobrenome,
                "email" => $req->email,
                "telefone" => $req->telefone
            ]

        );

        return redirect()->back();
    }

    public function excluir(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->delete();
        return redirect()->back();
    }

}
