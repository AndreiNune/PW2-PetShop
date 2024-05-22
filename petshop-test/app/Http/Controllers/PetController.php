<?php

namespace App\Http\Controllers;

use App\Models\Pet;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(Request $req){
        $pet = Pet::all();
        return view('welcome')->with("pet", $pet);
        
    }

    public function adicionar(Request $req){
        $pet = new Pet;
        $pet->nome = $req->nome;
        $pet->sobrenome = $req->sobrenome; 
        $pet->email = $req->email;
        $pet->telefone = $req->telefone;
        $pet->save();
        return redirect()->back();
    }

    public function editar(Request $req){
        $pet = Pet::find($req->id);
        return view('editar')->with("pet", $pet);
    }

    public function atualizar(Request $req){
        $pet = Pet::find($req->id);
        $pet->update(
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
        $pet = Pet::find($req->id);
        $pet->delete();
        return redirect()->back();
    }

}