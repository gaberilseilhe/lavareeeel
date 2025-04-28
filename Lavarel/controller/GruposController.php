<?php

namespace App\Http\Controllers;

use App\Models\Grupos;
use Illuminate\Routing\Controller as BaseController;

class GruposController extends BaseController
{
    public function getgrupos(){

        $grupos = Grupos::all();

    return response()->json($grupos);
}
}
