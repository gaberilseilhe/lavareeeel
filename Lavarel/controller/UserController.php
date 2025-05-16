<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createUsuario(Request $request)
    {
        $usuarioCriado = User::create([
            'nome_usuario' => $request->nome_usuario,
            'id_grupo' => $request->id_grupo,
            'data_nascimento' => $request->data_nascimento,
        ]);
        return response()->json($usuarioCriado);
    }

}
/*
https://localhost/Agendamento_sistem/create-usuario?nome_usuario=gabe&id_grupo=1&data_nascimento=2004-12-12
  */

