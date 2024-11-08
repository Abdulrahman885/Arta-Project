<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware(['auth', 'second'])->group(function () {
    
});
Route::apiResource('category',CategoryController::class);
Route::apiResource('region',RegionController::class);


