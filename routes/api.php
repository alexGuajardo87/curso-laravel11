<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CentrosComputoController;
use App\Http\Controllers\ReportesController;


Route::get('/holasss', function (Request $request) {
    return "Hola";
})->middleware('auth:sanctum');


Route::resource('centros-computo', CentrosComputoController::class);

Route::get('/obtener-centros-computo',[ReportesController::class,'getBuscaCentrosComputo'])->name('getBuscaCentrosComputo');

Route::post('/login',[LoginController::class,'authenticate'])->name('Login');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
