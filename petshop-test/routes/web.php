<?php

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\ConsultasController;

use App\Http\Controllers\PetController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 
    Começo da rota do navbar
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/cadastrarc', function () {
    return view('cadastrarc');
});

Route::get('/cadastrarp', function () {
    return view('cadastrarp');
});

Route::get('/aparicao', function () {
    return view('aparicao');
});

/* 
    Fim da rota do navbar
*/

/*Route::get("/aparicao", function () {
    $cliente = app()->make(ClienteController::class)->index();
    $pet = app()->make(PetController::class)->index();

    return view('aparicao', ['clientes' => $cliente, 'pets' => $pet]);
});*/ 


Route::post("/adicionar", [ClienteController::class, "adicionar"]);
Route::get("/editar/{id}", [ClienteController::class, "editar"]);
Route::post("/atualizar/{id}", [ClienteController::class, "atualizar"]);
Route::get("/excluir/{id}", [ClienteController::class, "excluir"]);


Route::post("aparicao", [PetController::class, "index"]);
Route::post("/adicionarp", [PetController::class, "adicionarp"]);
Route::get("/editarp/{id}", [PetController::class, "editarp"]);
Route::post("/atualizarp/{id}", [PetController::class, "atualizarp"]);
Route::get("/excluirp/{id}", [PetController::class, "excluirp"]);