<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NivelG;
class NivelesGasolinaController extends Controller
{
    public function index() {


        $nivelGasolina = NivelG::select('id','nivel')->get();

        return $nivelGasolina;
    }
}
