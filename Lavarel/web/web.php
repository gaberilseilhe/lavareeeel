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
