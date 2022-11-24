<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;

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


// Public Routes

Route::post('/login', [AuthController::class,'login']);
Route::post('/register', [AuthController::class,'register']);

/*
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
*/

// Protected Routes

Route::middleware(['auth:sanctum'])->group(function () {
    // Profile CRUD Routes
    Route::resource('profile', ProfileController::class);

    // Project Routes
    Route::resource('projects', ProjectController::class);
    Route::get('/projects/search/{name}', [ProjectController::class, 'search']);

    /*
    Route::post('/projects', [ProjectController::class, 'store']);
    Route::put('/projects/{id}', [ProjectController::class, 'update']);
    Route::delete('/projects/{id}', [ProjectController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
    */
});
