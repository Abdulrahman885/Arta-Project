<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegionController;
use App\Http\Controllers\API\ListingController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\Auth\UserAuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::middleware(['check.auth'])->group(function () {
    Route::post('logout',[UserAuthController::class,'logout']);
});

Route::apiResource('/category',CategoryController::class);
Route::apiResource('/region',RegionController::class);
Route::apiResource('/listing',ListingController::class);

Route::get('/regions/parents', [RegionController::class,'getParents']);
Route::get('/regions/{id}/children', [RegionController::class,'getChildren']);

Route::get('/categories/parents', [CategoryController::class,'getParents']);
Route::get('/categories/{id}/children', [CategoryController::class,'getChildren']);

// ------------- Auth Route ------------- //
Route::post('/register',[UserAuthController::class,'register']);
Route::post('/login',[UserAuthController::class,'login']);
Route::get('/login/google', [UserAuthController::class, 'redirectToGoogle']);
Route::get('/login/google/callback', [UserAuthController::class, 'handleGoogleCallback']);




