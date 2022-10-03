<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntregasController;
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

Route::get('entregas', [EntregasController::class, 'index']);
Route::get('entregas/{start?}/{limit?}/{orderby?}/{order?}', [EntregasController::class, 'index']);
Route::get('entregas/{id}', [EntregasController::class, 'show']);
Route::get('entregas/{q?}', [EntregasController::class, 'search']);
Route::post('entregas', [EntregasController::class, 'store']);
Route::put('entregas/{id}', [EntregasController::class, 'update']);
Route::delete('entregas/{id}', [EntregasController::class, 'delete']);