<?php

use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/menu', [MenuController::class, 'show']);
Route::post('/reservasi', [ReservasiController::class, 'store'])->name('reservasi.add');
Route::get('/reservasi',function (){
    return view('reservasi');
});
Route::get('/teams', function (){
    return view('teams');
});
Route::get('/', function (){
    return view('welcome');
});
