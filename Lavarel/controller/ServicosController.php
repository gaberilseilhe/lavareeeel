<?php

namespace App\Http\Controllers;
use App\Models\Servicos;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class ServicosController extends BaseController
{
    public function createServico(Request $request)
    {
        $servicoCriado = Servicos::create([
            'nome_servico' => $request->nome_servico,
            'valor' => $request->valor,
        ]);
        return response()->json($servicoCriado);
    }
}
/*
https://localhost/Agendamento_sistem/create-servico?nome_servico=aaaaa&valor=aa.aa
  */ 