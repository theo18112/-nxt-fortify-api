<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum','verified'])->group( function () {
    Route::get('/user',[UserController::class, 'authenticated']);
});
