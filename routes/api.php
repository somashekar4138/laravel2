<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserDeleteController;


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
Route::post('/form',[UserDeleteController::class,'mam']);
Route::get("/main",[UserDeleteController::class,'index']);
Route::get('edit/{id}',[UserDeleteController::class,'show']);
Route::post('edit/{id}',[UserDeleteController::class,'edit']);
Route::get('delete/{id}',[UserDeleteController::class,'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
