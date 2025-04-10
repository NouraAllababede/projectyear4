<?php

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

Route::post('register',[App\Http\Controllers\Api\AuthController::class,'register'])->name('register') ;
Route::post('login',[App\Http\Controllers\Api\AuthController::class,'login'])->name('login') ;
Route::post('logout',[App\Http\Controllers\Api\AuthController::class,'logout'])->name('logout') ;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:sanctum'])->group(function()

    {

Route::get('all/game',[App\Http\Controllers\Api\GameController::class,'index']) ;
Route::get('latestGames',[App\Http\Controllers\Api\GameController::class,'latestGames']) ;
Route::post('show',[App\Http\Controllers\Api\GameController::class,'show']) ;
Route::get('all/category',[App\Http\Controllers\Api\CategoryController::class,'index']) ;
Route::post('getGamesByCategory',[App\Http\Controllers\Api\GameController::class,'getGamesByCategory']) ;
Route::get('MostFollow',[App\Http\Controllers\Api\GameController::class,'MostFollow']) ;
Route::post('UpdateUserName',[App\Http\Controllers\Api\UserController::class,'UpdateUserName']) ;
Route::post('search', [App\Http\Controllers\Api\GameController::class, 'search']);


 }) ;