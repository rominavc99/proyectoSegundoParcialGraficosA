<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Respuesta;

class InspeccionesUnidadController extends Controller
{
    public function store(Request $request) {

        $respuesta = array();
        $respuesta["exito"] = false;

        //id_unidad
        $respuestaForm = new Respuesta();
        if($request->input('id_unidad')){
            $respuestaForm->id_unidad = $request->input('id_unidad');
        } else {
            $respuesta['mensaje'] = "El valor id unidad es obligatorio";
            return response()->json($respuesta,400);
        }

        //nivel gasolina
        if($request->input('nivel')){
            $respuestaForm->nivel = $request->input('nivel');
        } else {
            $respuesta['mensaje'] = "El valor nivel gasolina es obligatorio";
            return response()->json($respuesta,400);
        }

        //nivel aceite
        if($request->input('nivel')){
            $respuestaForm->nivel = $request->input('nivel');
        } else {
            $respuesta['mensaje'] = "El valor nivel aceite es obligatorio";
            return response()->json($respuesta,400);
        }

         //nivel aire llanta chofer delantera
        if($request->input('nivel_aire_chofer_delantera')){
            $respuestaForm->nivel_aire_chofer_delantera = $request->input('nivel_aire_chofer_delantera');
        } else {
            $respuesta['mensaje'] = "El valor nivel de aire de la llanta delantera es obligatorio";
            return response()->json($respuesta,400);
        }

        
         //nivel aire llanta chofer trasera
         if($request->input('nivel_aire_chofer_trasera')){
            $respuestaForm->nivel_aire_chofer_trasera = $request->input('nivel_aire_chofer_trasera');
        } else {
            $respuesta['mensaje'] = "El valor nivel de aire de la llanta trasera es obligatorio";
            return response()->json($respuesta,400);
        }

        //nivel aire llanta copiloto delantera
         if($request->input('nivel_aire_copiloto_delantera')){
            $respuestaForm->nivel_aire_copiloto_delantera = $request->input('nivel_aire_copiloto_delantera');
        } else {
            $respuesta['mensaje'] = "El valor nivel de aire de la llanta delantera del copiloto es obligatorio";
            return response()->json($respuesta,400);
        }

         //nivel aire llanta copiloto trasera
         if($request->input('nivel_aire_copiloto_trasera')){
            $respuestaForm->nivel_aire_copiloto_trasera = $request->input('nivel_aire_copiloto_trasera');
        } else {
            $respuesta['mensaje'] = "El valor nivel de aire de la llanta delantera del copiloto es obligatorio";
            return response()->json($respuesta,400);
        }

        try{
            if($respuestaForm->save()){
                //informacion vehiculo
                $respuesta['exito'] = true;
                
            } 
  
        } catch (\Exception $e) {

            $respuesta["mensaje"] = $e->getMessage();
            return response()->json($respuesta,500);
        }

        return $respuesta;


    }
}
