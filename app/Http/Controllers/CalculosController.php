<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculosController extends Controller
{
    function some($x, $y) {
        return 'Soma: ' . $x + $y;
    }
}
