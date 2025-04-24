<?php

use App\Http\Controllers\calculosController;
use App\Http\Controllers\KeepinhoController;
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


Route::get("/calc/somar/{x}/{y}", 
[calculosController::class, 'somar']);

//keepinho
Route::prefix('/keep')->group(function(){
    Route::get('/', [KeepinhoController::class,'index']);
});

