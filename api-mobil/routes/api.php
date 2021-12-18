<?php

use App\Http\Controllers\DataMobilController;
use App\Http\Controllers\GetIdController;
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

Route::get('mobil',[DataMobilController::class, 'index']);
Route::get('idmobil',[GetIdController::class, 'showId']);
Route::post('mobil',[DataMobilController::class, 'create']);
Route::put('mobil',[DataMobilController::class, 'update']);
Route::delete('mobil',[DataMobilController::class, 'delete']);
