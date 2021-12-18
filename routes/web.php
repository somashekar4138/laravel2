<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;
use App\Http\Controllers\userController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form',function(){
    return view('form');
});
Route::get('/form2',function(){
    return view('form2');
});
Route::post('/form',[userController::class,'mam']);
Route::get("/main",[userController::class,'index']);
Route::get('edit/{id}',[userController::class,'show']);
Route::post('edit/{id}',[userController::class,'edit']);
Route::get('delete/{id}',[userController::class,'destroy']);

