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
    /** 
         * $(instancia)->(-> puxa uma variável do vetor) = $req-> (nome do input referente ao campo)
         *
         * $cliente->nome = $req->firstname
         * */

    public function adicionar3(Request $req){
        $pet = new Pet;
        $pet->nome = $req->nome;
        $pet->especie = $req->espec; 
        $pet->genero = $req->genero;
        $pet->raca = $req->raca;
        $pet->responsavel = $req->responsible;
        $pet->doenca = $req->doenca;
        $pet->save();
        return redirect()->back();
    }

    public function editar3(Request $req){
        $pet = Pet::find($req->id);
        return view('editar3')->with("pet", $pet);
    }

    public function atualizar3(Request $req){
        $pet = Pet::find($req->id);
        $pet->update(
            [
                "nome" => $req->nome,
                "especie" => $req->especie,
                "genero" => $req->genero,
                "raca" => $req->raca,
                "responsible" => $req->responsible,
                "doenca" => $req->doenca,
            ]
        );
        return redirect()->back();
    }

    public function excluir3(Request $req){
        $pet = Pet::find($req->id);
        $pet->delete();
        return redirect()->back();
    }
}