<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MinatBakatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('dashboard',[HomeController::class,'dashboard']);

Route::get('minatbakat',[MinatBakatController::class,'minatbakat']);
Route::get('jurusan',[JurusanController::class,'jurusan']);
Route::get('teknik_informatika',[JurusanController::class,'teknik_informatika']);
Route::get('kampus',[JurusanController::class,'kampus']);
Route::get('if',[JurusanController::class,'if']);
Route::get('si',[JurusanController::class,'si']);
Route::get('sk',[JurusanController::class,'sk']);
Route::get('ti',[JurusanController::class,'ti']);
