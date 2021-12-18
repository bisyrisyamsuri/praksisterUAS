<?php

use App\Http\Controllers\DataPenyewaController;
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

Route::get('penyewa',[DataPenyewaController::class, 'index']);
Route::get('idpenyewa',[GetIdController::class, 'showId']);
Route::post('penyewa',[DataPenyewaController::class, 'create']);
Route::put('penyewa',[DataPenyewaController::class, 'update']);
Route::delete('penyewa',[DataPenyewaController::class, 'delete']);
