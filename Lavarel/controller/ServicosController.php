<?php

namespace App\Http\Controllers;

use App\Models\Servicos;
use Illuminate\Routing\Controller as BaseController;

class ServicosController extends BaseController
{
    public function getservicos()
    {
        $servico = Servicos::all();

        return response()->json($servico);
    }
}
