<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, "loginPage"]);
Route::post('/login', [LoginController::class, "doLogin"]);

Route::get('/register', [LoginController::class,'registerPage']);
Route::post('/register', [LoginController::class,'doRegister']);
