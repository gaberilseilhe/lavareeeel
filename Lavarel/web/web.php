<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GruposController;


Route::get('usuarios', [UserController::class, 'getusuarios']);

Route::get('servicos', [ServicosController::class, 'getservicos']);

Route::get('agendamento', [AgendamentoController::class, 'getagendamento']);

Route::get('agenda', [AgendaController::class, 'getagenda']);

Route::get('grupos', [GruposController::class, 'getgrupos']);

Route::get('/create-usuario', [
    UserController::class,
    'createUsuario'
]); 
Route::get('/create-servico', [
    ServicosController::class,
    'createServico'
]);
Route::get('/create-grupo', [
    GruposController::class,
    'createGrupo'
]);
Route::get('/create-agendamento', [
    AgendamentoController::class,
    'createAgendamento'
]);
Route::get('/create-agenda', [
    AgendaController::class,
    'createAgenda'
]);