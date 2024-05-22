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

Route::get("/", [ClienteController::class, "index"]);
Route::post("/adicionar", [ClienteController::class, "adicionar"]);
Route::get("/editar/{id}", [ClienteController::class, "editar"]);
Route::post("/atualizar/{id}", [ClienteController::class, "atualizar"]);
Route::get("/excluir/{id}", [ClienteController::class, "excluir"]);

Route::get("/", [ConsultasController::class, "index"]);
Route::post("/adicionar", [ConsultasController::class, "adicionar"]);
Route::get("/editar/{id}", [ConsultasController::class, "editar"]);
Route::post("/atualizar/{id}", [ConsultasController::class, "atualizar"]);
Route::get("/excluir/{id}", [ConsultasController::class, "excluir"]);

Route::get("/", [PetController::class, "index"]);
Route::post("/adicionar", [PetController::class, "adicionar"]);
Route::get("/editar/{id}", [PetController::class, "editar"]);
Route::post("/atualizar/{id}", [PetController::class, "atualizar"]);
Route::get("/excluir/{id}", [PetController::class, "excluir"]);