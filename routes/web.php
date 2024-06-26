<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(authController::class)->group(function (){
    Route::get('index','index',)->name('index');
<<<<<<< HEAD

});

Route::controller(produtccontroller::class)->group(function (){
    Route::get('create','create',)->name('create');
});


=======
});
>>>>>>> parent of 33d2ca9 (merubah route)
