<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChemicalController extends Controller
{

    public function index ()
    {
        $sodio = 0;
        $yZinc = 0;
        $iSodio = 0;
        $zinc = 0;
        return view('Exercise-1')->with('sodio',$sodio)->with('yZinc',$yZinc)->with('iSodio',$iSodio)->with('zinc',$zinc);


    }
    public function generate (Request $Request)
    {
        $sodio = $Request->Sodio;
        $yZinc = $Request->Yodurodezinc;
        $iSodio = $Request->Iodurodesodio;
        $zinc = $Request->Zinc;
        return view('Exercise-1')->with('sodio',$sodio)->with('yZinc',$yZinc)->with('iSodio',$iSodio)->with('zinc',$zinc);


    }
}
