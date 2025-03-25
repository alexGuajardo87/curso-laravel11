<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CentrosComputoController;
use App\Http\Controllers\ReportesController;
use App\Http\Controllers\Procesos\ProcesosHorariosController;
use App\Http\Controllers\Reportes\ReportesHorariosController;


Route::get('/hola', function (Request $request) {
    return "Hola";
})->middleware('auth:sanctum');




Route::resource('centros-computo', CentrosComputoController::class);



Route::post('/asignar-horario',[ProcesosHorariosController::class,'insertarHorarioCentroComputo'])->name('insertarHorarioCentroComputo');
Route::get('/obtener-horarios-asginados',[ReportesHorariosController::class,'obtenerHorariosAsignados'])->name('obtenerHorariosAsignados');

Route::post('/login',[LoginController::class,'authenticate'])->name('Login');

Route::post('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
