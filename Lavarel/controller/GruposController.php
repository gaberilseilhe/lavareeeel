<?php

namespace App\Http\Controllers;

use App\Models\Grupos;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class GruposController extends BaseController
{
    public function getgrupos()
    {

        $grupos = Grupos::all();

        return response()->json($grupos);
    }
    public function createGrupo(Request $request)
    {
        $grupoCriado = Grupos::create([
            'nome_grupo' => $request->nome_grupo,
        ]);
        return response()->json($grupoCriado);
    }
}

/*
https://localhost/Agendamento_sistem/create-grupo?nome_grupo=Admin
  */
