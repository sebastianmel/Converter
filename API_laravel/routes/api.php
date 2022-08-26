<?php

use App\Http\Controllers\CurrencyController;
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

Route::get('Currency', [CurrencyController::class,'index']);
Route::post('CurrencyPost', [CurrencyController::class,'store']);
Route::get('Currency/{id}', [CurrencyController::class,'show']);
Route::post('CurrencyUpdate/{id}', [CurrencyController::class,'update']);
Route::delete('CurrencyDelete/{id}', [CurrencyController::class,'destroy']);



// Route::get('/users', [CurrencyController::class, 'index']);
