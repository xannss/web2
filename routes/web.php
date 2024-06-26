<?php

use App\Http\Controllers\produtccontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(produtccontroller::class)->group(function (){
    Route::get('index','index',)->name('index');

});

Route::controller(produtccontroller::class)->group(function (){
    Route::get('create','create',)->name('create');
});


