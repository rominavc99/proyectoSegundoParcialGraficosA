<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NivelA;

class NivelesAceiteController extends Controller
{
    public function index() {


        $nivelAceite = NivelA::select('id','nivel')->get();

        return $nivelAceite;
    }
}
