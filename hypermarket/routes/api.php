<?php

use App\Http\Controllers\MarketController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('market', MarketController::class);
Route::get('market', [MarketController::class, 'index']);
Route::post('market', [MarketController::class, 'store']);
Route::get('market/{id}', [MarketController::class, 'show']);
Route::put('market/{id}', [MarketController::class, 'update']);
Route::delete('market/{id}', [MarketController::class, 'delete']);