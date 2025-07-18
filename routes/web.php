<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\emailController;



Route::get('/', function () {
    return view('email-verification');
});

Route::post('/user', [emailController::class, 'store'])->name('submit.email');

Route::fallback(function () {
    return "<h1>This Is Not Right URL <br/> Please Check </h1>";
});
// Route::redirect('/', '/register');
