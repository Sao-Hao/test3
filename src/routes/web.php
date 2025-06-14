<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WeightLogController;

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

//Route::get('/', function () {  return view('welcome');});
Route::get('/weight_logs', [WeightLogController::class, 'index']);
Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
    });