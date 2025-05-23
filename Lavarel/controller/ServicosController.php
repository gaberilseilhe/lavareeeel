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
    public function deletarServico(Request $request)
    {
        $servico = Servicos::find($request->id_servicos)->delete();
        return response()->json($servico);
    }

    public function atualizarServico(Request $request)
    {
        $servico = Servicos::find($request->id_servicos)
            ->update([
                'nome_servico' => $request->nome_servico,

            ]);
    }

}
/*
https://localhost/Agendamento_sistem/create-servico?nome_servico=aaaaa&valor=aa.aa
  */