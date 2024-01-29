<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\ResponsibilitiesController;
use App\Http\Controllers\SuppliesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ToolController;

// Route::get('/personnel', function (){
//     return "Hello from API";
// });

// routes/api.php

// Personnel routes
Route::get('/personnel', [PersonnelController::class, 'index']);
Route::get('/personnel/{id}', [PersonnelController::class, 'show']);
Route::post('/personnel', [PersonnelController::class, 'store']);
Route::put('/personnel/{id}', [PersonnelController::class, 'update']);
Route::delete('/personnel/{id}', [PersonnelController::class, 'destroy']);

// Farm Responsibilities routes

Route::get('/responsibilities', [ResponsibilitiesController::class, 'index']);
Route::get('/responsibilities/{id}', [ResponsibilitiesController::class, 'show']);
Route::post('/responsibilities', [ResponsibilitiesController::class, 'store']);
Route::put('/responsibilities/{id}', [ResponsibilitiesController::class, 'update']);
Route::delete('/responsibilities/{id}', [ResponsibilitiesController::class, 'destroy']);

// Supplies routes
Route::get('/supplies', [SuppliesController::class, 'index']);
Route::get('/supplies/{id}', [SuppliesController::class, 'show']);
Route::post('/supplies', [SuppliesController::class, 'store']);
Route::put('/supplies/{id}', [SuppliesController::class, 'update']);
Route::delete('/supplies/{id}', [SuppliesController::class, 'destroy']);

// API Resource routes

Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{id}', [ProductController::class, 'update']);
Route::delete('/product/{id}', [ProductController::class, 'destroy']);
Route::apiResource('tools', ToolController::class);

 
// Route::resource('personnel', PersonnelController::class);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
