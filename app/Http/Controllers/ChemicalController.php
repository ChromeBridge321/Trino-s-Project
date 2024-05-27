<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChemicalController extends Controller
{
    //codigo funcinal para la validacion y generacion de variables e imagenes de cada molecula

    public function index(Request $Request) // funcion para mostrar la vista x
    {
        //variable para la vista excercise-x y evitar crear codigo inecesario
        $view = $Request->vista;
        //Primera instancia del valor de las variables
        $molecula_1 = 1;
        $molecula_2 = 1;
        $molecula_3 = 1;
        $molecula_4 = 1;

        //Primera instancia del valor de las variables de respuesta
        $Rmolecula_1 = 1;
        $Rmolecula_2 = 1;
        $Rmolecula_3 = 1;
        $Rmolecula_4 = 1;

        //devolucion de las varibles a la vista exercise x
        return view($view)->with('molecula_1', $molecula_1)->with('molecula_2', $molecula_2)->with('molecula_3', $molecula_3)->with('molecula_4', $molecula_4)
            ->with('Rmolecula_1', $Rmolecula_1)->with('Rmolecula_2', $Rmolecula_2)->with('Rmolecula_3', $Rmolecula_3)->with('Rmolecula_4', $Rmolecula_4)->with('vista', $view);
    }
    public function generate(Request $Request)
    {
        //variable para la vista excercise-x y evitar crear codigo inecesario
        $view = $Request->vista;
        //aqui las variables toman el valor segun el imput con nombre "molecula-x" de acuerdo a ese valor sera el numero de veces
        //que se imprimira la imagen asociada a la molecula-x
        $molecula_1 = $Request->molecula_1;
        $molecula_2 = $Request->molecula_2;
        $molecula_3 = $Request->molecula_3;
        $molecula_4 = $Request->molecula_4;

        //segunda instancia del valor de las variables de respuesta esto es para poder evitar errores
        //al mostrar las vistas
        $Rmolecula_1 = 1;
        $Rmolecula_2 = 1;
        $Rmolecula_3 = 1;
        $Rmolecula_4 = 1;

        //devolucion de las varibles a la vista exercise x
        return view($view)->with('molecula_1', $molecula_1)->with('molecula_2', $molecula_2)->with('molecula_3', $molecula_3)->with('molecula_4', $molecula_4)
            ->with('Rmolecula_1', $Rmolecula_1)->with('Rmolecula_2', $Rmolecula_2)->with('Rmolecula_3', $Rmolecula_3)->with('Rmolecula_4', $Rmolecula_4)->with('vista', $view);
    }

    public function answer(Request $Request)
    {
        //variable para la vista excercise-x y evitar crear codigo inecesario
        $view = $Request->vista;

        //seccion de validacion de respuestas la peticion recibe los valores colocados en los inputs
        //con nombre "molecula-x" y se guardan en las siguientes variables
        $molecula_1 = $Request->Rmolecula_1;
        $molecula_2 = $Request->Rmolecula_2;
        $molecula_3 = $Request->Rmolecula_3;
        $molecula_4 = $Request->Rmolecula_4;

        //instancia de variables de respuestas estas se usaran para mostrar un mensaje de alerta segun se el caso
        // (correcto o incorrecto)
        $Rmolecula_1 = $Request->Rmolecula_1;
        $Rmolecula_2 = $Request->Rmolecula_2;
        $Rmolecula_3 = $Request->Rmolecula_3;
        $Rmolecula_4 = $Request->Rmolecula_4;

        //devolucion de las varibles a la vista exercise x
        return view($view)->with('molecula_1', $molecula_1)->with('molecula_2', $molecula_2)->with('molecula_3', $molecula_3)->with('molecula_4', $molecula_4)
            ->with('Rmolecula_1', $Rmolecula_1)->with('Rmolecula_2', $Rmolecula_2)->with('Rmolecula_3', $Rmolecula_3)->with('Rmolecula_4', $Rmolecula_4)->with('vista', $view);
    }
}
