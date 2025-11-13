<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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

Route::get('siswa',[SiswaController::class,'index']);
Route::get('siswa/create',[SiswaController::class,'create']);
Route::post('siswa/store',[SiswaController::class,'store']);
Route::get('siswa/{id}/delete',[SiswaController::class,'delete']);
Route::get('siswa/{id}/edit',[SiswaController::class,'edit']);
Route::post('siswa/update/{id}',[SiswaController::class,'update']);