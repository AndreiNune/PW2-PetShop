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


/* 
    Fim da rota do navbar
*/

Route::post("/adicionar", [ClienteController::class, "adicionar"]);
Route::get("/editarc/{id}", [ClienteController::class, "editarc"]);
Route::post("/atualizarc/{id}", [ClienteController::class, "atualizarc"]);
Route::get("/excluir/{id}", [ClienteController::class, "excluir"]);


Route::get("aparicao", [PetController::class, "index"]);
Route::post("/adicionarp", [PetController::class, "adicionarp"]);
Route::get("/editarp/{id}", [PetController::class, "editarp"]);
Route::post("/atualizarp/{id}", [PetController::class, "atualizarp"]);
Route::get("/excluirp/{id}", [PetController::class, "excluirp"]);