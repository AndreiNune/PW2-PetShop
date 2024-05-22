<?php

namespace App\Http\Controllers;

use App\Models\Consulta;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function index(Request $req){
        $consulta = Consulta::all();
        return view('welcome')->with("consulta", $consulta);
        
    }

    public function adicionar(Request $req){
        $consulta = new Consulta;
        $consulta->data = $req->data;
        $consulta->hora = $req->hora; 
        $consulta->observacoes = $req->observacoes;
        $consulta->save();
        return redirect()->back();
    }

    public function editar(Request $req){
        $consulta = consulta::find($req->id);
        return view('editar')->with("consulta", $consulta);
    }

    public function atualizar(Request $req){
        $consulta = consulta::find($req->id);
        $consulta->update(
            [
                "data" => $req->data,
                "hora" => $req->hora,
                "observacoes" => $req->observacoes,
            ]
        );

        return redirect()->back();
    }

    public function excluir(Request $req){
        $consulta = consulta::find($req->id);
        $consulta->delete();
        return redirect()->back();
    }

}

