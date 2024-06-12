<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /*$req é a variável que guarda tds os valores que vêm da ultima tela em um vetor*/
    public function index(Request $req){
        $cliente = Cliente::all();
        return redirect('aparicao')->with("cliente", $cliente);
        
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

    public function editarc(Request $req){
        $cliente = Cliente::find($req->id);
        return view('editarc')->with("cliente", $cliente);
    }

    public function atualizarc(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->update(
            [
                "nome" => $req->first_name,
                "sobrenome" => $req->last_name,
                "email" => $req->email,
                "telefone" => $req->phone
            ]

        );
        $cliente = Cliente::all();
        return redirect('aparicao')->with("cliente", $cliente);
    }

    public function excluir(Request $req){
        $cliente = Cliente::find($req->id);
        $cliente->delete();
        return redirect()->back();
    }

}
