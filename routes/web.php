<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\forgotpasswordController;
use App\Http\Controllers\addpageController;
use App\Http\Controllers\viewpageController;
use App\Http\Controllers\emailpassController;
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



route::get('/login',[loginController::class,'login']);
route::get('/dashboard',[dashboardController::class,'dashboard']);
route::get('/resetpass',[forgotpasswordController::class,'forgotpassword']);
route::get('/addreminder',[addpageController::class,'addpage']);
route::get('/editreminder',[viewpageController::class,'viewpage']);
route::get('/forgotpass',[emailpassController::class,'emailpass']);

