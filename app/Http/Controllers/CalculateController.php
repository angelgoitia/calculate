<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function getBodyMass(Request $request){
        if(isset($request->weight) && isset($request->height)){
            $weight = $request->weight;
            $height = $request->height / 100;
            $imc = ($weight / ($height * $height));
            return response()->json(array('code' => 202, 'result' => number_format($imc, 2)));
        }else{
            return response()->json(array('code' => 401, 'message' => 'invalid parameters'));
        }
    }
}
