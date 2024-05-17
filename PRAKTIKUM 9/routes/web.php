<?php

namespace App\Http\AdminController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/admin", [AdminController::class, 'index']);