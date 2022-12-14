o<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\JobsApplicationsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', UsersController::class);
Route::apiResource('jobs', JobsController::class);
Route::apiResource('categories', CategoriesController::class);
Route::apiResource('jobs_applications', JobsApplicationsController::class);
