<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function(){
    return view('teste');
});

Route::get('/teste/{valor}', function($valor ){
    return "voce digitou: {$valor}";
});         

Route::get('/teste/{x}/{y}', function($x, $y ){
    $soma = $x + $y;
    return "voce digitou: " . $soma;
}); 