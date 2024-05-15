<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OfficeController;

use App\Http\Controllers\Admin\Admin_OfficeController;
use App\Http\Controllers\Admin\Admin_AgenController;
use App\Http\Controllers\Admin\Admin_CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, "loginPage"]);
Route::post('/login', [LoginController::class, "doLogin"]);

Route::get('/register', [LoginController::class, 'registerPage']);
Route::post('/register', [LoginController::class, 'doRegister']);

Route::get('/search', [SearchController::class, "searchPage"]);

Route::get('/office', [OfficeController::class, "officePage"]);
Route::get('/logout', [LoginController::class, "logout"]);


Route::prefix('/admin')->group(function () {

    Route::prefix("/office")->group(function () {
        Route::get('/', [Admin_OfficeController::class, "officePage"]);

        Route::get('/add', [Admin_OfficeController::class, "addPage"]);
        Route::post('/add', [Admin_OfficeController::class, "do_addOffice"]);

        Route::get('/loadKota', [Admin_OfficeController::class, "loadKota"])->name("adminloadKota");

        Route::get('/edit/{id}', [Admin_OfficeController::class, "editPage"]);
        Route::post('/edit/{id}', [Admin_OfficeController::class, "do_editOffice"]);

        Route::get('/delete/{id}', [Admin_OfficeController::class, "deleteOffice"])->name('deleteOffice');

        Route::get('/{id}', [Admin_OfficeController::class, "viewOffice"]);
    });


    Route::prefix("/agen")->group(function () {
        Route::get("/add", [Admin_AgenController::class, "pageAdd"]);
        Route::post("/add", [Admin_AgenController::class, "addAgen"]);

        Route::get('/loadAgen', [Admin_AgenController::class, "loadAgen"])->name("adminloadAgen");
    });

    Route::prefix("/customer")->group(function () {
        Route::get("/", [Admin_CustomerController::class, "customerPage"]);

        Route::get("/load", [Admin_CustomerController::class, "loadCustomer"])->name("adminloadCustomer");
    });
});

