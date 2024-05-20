<?php

use App\Http\Controllers\RandomNumbersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/number', [RandomNumbersController::class, 'generate']);
Route::get('/number/{min}&{max}', [RandomNumbersController::class, 'generateInRange']);
Route::get('/number/{id}', [RandomNumbersController::class, 'retrieve']);
