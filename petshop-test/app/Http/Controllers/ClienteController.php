<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $req){
        $cliente = Cliente::all();
        return view('welcome')->with("cliente", $cliente);
        
    }

    public function adicionar(Request $req){
        $cliente = new Cliente;
        $cliente->nome = $req->nome;
        $cliente->sobrenome = $req->sobrenome; 
        $cliente->email = $req->email;
        $cliente->telefone = $req->telefone;
        $contato->save();
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
