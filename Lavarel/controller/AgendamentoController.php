<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class AgendamentoController extends BaseController
{
   public function createAgendamento(Request $request)
    {
        $agendamentoCriado = Agendamento::create([
            'id_usuario' => $request->id_usuario,
            'id_servico' => $request->id_servico,
            'id_agenda' => $request->id_agenda,
            'data' => $request->data,
        ]);
        return response()->json($agendamentoCriado);
    }
}
/*
https://localhost/Agendamento_sistem/create-agendamento?id_usuario=1&id_servico=1&id_agenda=1&data=1200-12-23
*/