<?php

namespace App\Http\Controllers;

class calculosController extends Controller
{
    function somar($x, $y) {
        return 'Soma: ' . $x + $y;
    }
}


function subtrair($x, $y){
    return 'Subtração: ' . $x + $y;
}