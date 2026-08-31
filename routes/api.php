<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CitaController;

Route::apiResource('citas', CitaController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
