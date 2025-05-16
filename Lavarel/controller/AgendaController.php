<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AgendaController extends BaseController
{
     public function createAgenda(Request $request)
    {
        $agendaCriada = Agenda::create([
            'id_usuario' => $request -> id_usuario,
            'dia_da_semana' => $request-> dia_da_semana,
            'horario' => $request -> horario,
        ]);
        return response()->json($agendaCriada);
    }
}

/*
https://localhost/Agendamento_sistem/create-agenda?id_usuario=1&dia_da_semana=1000-10-10&horario=12:00
*/
