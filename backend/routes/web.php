<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;


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

Route::get('/',[BannerController::class,'show']);

Route::get('/banner-create',[BannerController::class,'create']);

Route::post('/banner-store',[BannerController::class,'store']);

Route::get('/banner-edit/{id}',[BannerController::class,'edit']);

Route::put('/banner-update/{id}',[BannerController::class,'update']);

Route::delete('/banner-delete/{id}',[BannerController::class,'delete']);


