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


Route::get('/cadastrarc.blade.php', function () {
    return view('cadastrarc');
});

Route::get('/cadastrarp.blade.php', function () {
    return view('cadastrarp');
});

Route::get('/aparicao', function () {
    return view('aparicao');
});

/* 
    Fim da rota do navbar
*/

Route::get("/aparicao", [ClienteController::class, "index"]);
Route::post("/adicionar", [ClienteController::class, "adicionar"]);
Route::get("/editar/{id}", [ClienteController::class, "editar"]);
Route::post("/atualizar/{id}", [ClienteController::class, "atualizar"]);
Route::get("/excluir/{id}", [ClienteController::class, "excluir"]);

Route::post("/adicionarp", [PetController::class, "adicionar3"]);
Route::get("/editar3/{id}", [PetController::class, "editar3"]);
Route::post("/atualizar3/{id}", [PetController::class, "atualizar3"]);
Route::get("/excluirp/{id}", [PetController::class, "excluir"]);