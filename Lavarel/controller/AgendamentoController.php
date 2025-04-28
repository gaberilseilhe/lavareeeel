<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use Illuminate\Routing\Controller as BaseController;

class AgendamentoController extends BaseController
{
    public function getagendamento(){

        $agendamento = Agendamento::all();

    return response()->json($agendamento);
}
}
