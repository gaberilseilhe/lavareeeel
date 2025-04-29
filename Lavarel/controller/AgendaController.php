<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Routing\Controller as BaseController;

class AgendaController extends BaseController
{
    public function getagenda(){

        $agenda = Agenda::all();

    return response()->json($agenda);
}
}
