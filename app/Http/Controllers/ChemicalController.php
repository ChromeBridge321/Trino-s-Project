<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChemicalController extends Controller
{

    public function index ()
    {
        $molecula_1 = 1;
        $molecula_2 = 1;
        $molecula_3 = 1;
        $molecula_4 = 1;
        $Rmolecula_1 = 1;
        $Rmolecula_2 = 1;
        $Rmolecula_3 = 1;
        $Rmolecula_4 = 1;
        return view('Exercise-1')->with('molecula_1',$molecula_1)->with('molecula_2',$molecula_2)->with('molecula_3',$molecula_3)->with('molecula_4',$molecula_4)
        ->with('Rmolecula_1',$Rmolecula_1)->with('Rmolecula_2',$Rmolecula_2)->with('Rmolecula_3',$Rmolecula_3)->with('Rmolecula_4',$Rmolecula_4);


    }
    public function generate (Request $Request)
    {
        $molecula_1 = $Request->Sodio;
        $molecula_2 = $Request->Yodurodezinc;
        $molecula_3 = $Request->Iodurodesodio;
        $molecula_4 = $Request->Zinc;
        $Rmolecula_1 = 1;
        $Rmolecula_2 = 1;
        $Rmolecula_3 = 1;
        $Rmolecula_4 = 1;
        return view('Exercise-1')->with('molecula_1',$molecula_1)->with('molecula_2',$molecula_2)->with('molecula_3',$molecula_3)->with('molecula_4',$molecula_4)
        ->with('Rmolecula_1',$Rmolecula_1)->with('Rmolecula_2',$Rmolecula_2)->with('Rmolecula_3',$Rmolecula_3)->with('Rmolecula_4',$Rmolecula_4);


    }

    public function answer (Request $Request)
    {
        $molecula_1 = $Request->Sodio;
        $molecula_2 = $Request->Yodurodezinc;
        $molecula_3 = $Request->Iodurodesodio;
        $molecula_4 = $Request->Zinc;
        $Rmolecula_1 = $Request->Sodio;
        $Rmolecula_2 = $Request->Yodurodezinc;
        $Rmolecula_3 = $Request->Iodurodesodio;
        $Rmolecula_4 = $Request->Zinc;
        return view('Exercise-1')->with('molecula_1',$molecula_1)->with('molecula_2',$molecula_2)->with('molecula_3',$molecula_3)->with('molecula_4',$molecula_4)
        ->with('Rmolecula_1',$Rmolecula_1)->with('Rmolecula_2',$Rmolecula_2)->with('Rmolecula_3',$Rmolecula_3)->with('Rmolecula_4',$Rmolecula_4);


    }
}
