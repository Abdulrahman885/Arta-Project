<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegionController;
use App\Http\Controllers\API\ListingController;
use App\Http\Controllers\API\CategoryController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware(['auth', 'second'])->group(function () {
    
});
Route::apiResource('/category',CategoryController::class);
Route::apiResource('/region',RegionController::class);
Route::apiResource('/listing',ListingController::class);

Route::get('/regions/parents', [RegionController::class, 'getParents']);
Route::get('/regions/{id}/children', [RegionController::class, 'getChildren']);


