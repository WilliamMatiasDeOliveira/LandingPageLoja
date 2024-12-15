<?php

use App\Http\Controllers\LoginCheckController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'app.home')->name('home');
Route::view('/orgaos', 'app.orgaos')->name('orgaos');
Route::view('/onde-estamos', 'app.onde_estamos')->name('onde_estamos');
Route::view('/comprar', 'app.comprar')->name('comprar');
Route::get('/depoimento', [MessageController::class, 'depoimento'])->name('depoimento');
Route::get('/post', [MessageController::class, 'store'])->name('depoimento.store');


Route::middleware('guest')->group(function () {
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register/store', [LoginCheckController::class, 'register'])->name('register.store');
    Route::view('/login', 'auth.login')->name('login');
    Route::post('/login/login', [LoginCheckController::class, 'login'])->name('login.login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginCheckController::class, 'logout'])->name('logout');
    Route::post('/post/submit', [MessageController::class, 'postSubmit'])->name('postSubmit');

});
