<?php

use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});
Route::get('kelas',[KelasController::class,'index']);
Route::get('kelas/create',[KelasController::class,'create']);
Route::post('kelas/store',[KelasController::class,'store']);
Route::get('kelas/{id}/delete',[KelasController::class,'destroy']);
Route::get('kelas/{id}/edit',[KelasController::class,'edit']);
Route::post('kelas/update/{id}',[KelasController::class,'update']);