<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GruposController;


Route::get('usuarios', [UserController::class, 'getusuarios']);

Route::get('servicos', [ServicosController::class, 'getservicos']);

Route::get('grupos', [GruposController::class, 'getgrupos']);

Route::get('agendamento', [AgendamentoController::class, 'getagendamento']);

Route::get('agenda', [AgendaController::class, 'getagenda']);




Route::get('/create-usuario', [UserController::class, 'createUsuario']);
Route::get('/create-servico', [ServicosController::class, 'createServico']);
Route::get('/create-grupo', [GruposController::class, 'createGrupo']);
Route::get('/create-agendamento', [AgendamentoController::class, 'createAgendamento']);
Route::get('/create-agenda', [AgendaController::class, 'createAgenda']);



Route::get('deletarUsuario/{id_usuario}', [UserController::class, 'deletarUsuario']);
Route::get('atualizar/{id_usuario}', [UserController::class, 'atualizarUsuario']);

Route::get('deletarServico/{id_servicos}', [ServicosController::class, 'deletarServico']);
Route::get('atualizarServico/{id_servicos}', [ServicosController::class, 'atualizarServico']);

Route::get('deletarGrupo/{id_grupo}', [GruposController::class, 'deletarGrupo']);
Route::get('atualizar/{id_grupo}', [GruposController::class, 'atualizarGrupo']);

Route::get('deletarAgendamento/{id_agendamento}', [AgendamentoController::class, 'deletarAgendamento']);
Route::get('atualizar/{id_agendamento}', [AgendamentoController::class, 'atualizarAgendamento']);

Route::get('deletarAgenda/{id_agenda}', [AgendaController::class, 'deletarAgenda']);
Route::get('atualizar/{id_agenda}', [AgendaController::class, 'atualizarAgenda']);