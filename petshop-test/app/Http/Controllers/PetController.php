<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Cliente;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(Request $req){
        $pet = Pet::all();
        $cliente = Cliente::all();
        return view('aparicao')->with("pet", $pet)->with("cliente", $cliente);
        
    }
    /** 
         * $(instancia)->(-> puxa uma variável do vetor) = $req-> (nome do input referente ao campo)
         *
         * $pet->nome = $req->nome
         * */

    public function adicionarp(Request $req){
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

    public function editarp(Request $req){
        $pet = Pet::find($req->id);
        return view('editarp')->with("pet", $pet);
    }

    public function atualizarp(Request $req){
        $pet = Pet::find($req->id);
        $pet->update(
            [
                "nome" => $req->nome,
                "especie" => $req->espec,
                "genero" => $req->genero,
                "raca" => $req->raca,
                "responsible" => $req->responsible,
                "doenca" => $req->doenca,
            ]
        );
        $pet = Pet::all();
        $cliente = Cliente::all();
        return redirect('aparicao')->with("pet", $pet) ->with("cliente", $cliente);
    }

    public function excluirp(Request $req){
        $pet = Pet::find($req->id);
        $pet->delete();
        return redirect()->back();
    }
}