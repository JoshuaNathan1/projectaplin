<?php

use App\Http\Controllers\utilController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\OfficeController;

use App\Http\Controllers\Admin\Admin_OfficeController;
use App\Http\Controllers\Admin\Admin_AgenController;
use App\Http\Controllers\Admin\Admin_CustomerController;

use App\Http\Controllers\Agen\Agen_PropertiController;
use App\Http\Controllers\User\User_HomeController;

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

Route::prefix("/agen")->group(function () {
    Route::prefix("/properti")->group(function () {
        Route::get("/", [Agen_PropertiController::class, "propertiPage"]);

        Route::get("/add", [Agen_PropertiController::class, "addPage"]);
        Route::post("/add", [Agen_PropertiController::class, "do_addPage"]);

        Route::get("/delete/{id}", [Agen_PropertiController::class, "deleteProperti"])->name("deleteProperti");

        Route::get("/{id}", [Agen_PropertiController::class, "editPage"]);
        Route::post("/{id}", [Agen_PropertiController::class, "do_editPage"]);
    });
});

Route::prefix("/utils")->group(function () {
    Route::get("/provinsi", [utilController::class, "provinsiPage"]);

    Route::get("/kota/{id}", [utilController::class, "kotaByProvinsi"]);
    Route::post("/kota/{id}", [utilController::class, "addKota"]);

    Route::get("/kecamatan/{id}", [utilController::class, "kecamatanPage"]);
    Route::post("/kecamatan/{id}", [utilController::class, "addKecamatan"]);
});

Route::get('/loadKota', [utilController::class, "loadKota"])->name("loadKota");
Route::get('/loadKecamatan', [utilController::class, "loadKecamatan"])->name("loadKecamatan");
