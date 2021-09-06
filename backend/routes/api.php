<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ProductApiController;
use App\Http\Controllers\api\BannerApiController;
use App\Http\Controllers\api\CategoryApiController;
use App\Http\Controllers\api\AuthApiController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::prefix('customer')->group(function () {
    Route::post('register',[AuthApiController::class,'register']);
    Route::post('login',[AuthApiController::class,'login']);
});
Route::prefix('product')->group(function () {
    Route::get('index',[ProductApiController::class,'index']);
    Route::get('show/{id}',[ProductApiController::class,'show']);
});

Route::prefix('banner')->group(function () {
    Route::get('index',[BannerApiController::class,'index']);
});

Route::prefix('category')->group(function () {
    Route::get('index',[CategoryApiController::class,'index']);
});