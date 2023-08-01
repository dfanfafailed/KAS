<?php

use App\Http\Controllers\DanaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasController;
use Illuminate\Support\Facades\Route;


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

Route::get('/', [DashboardController::class, 'index']);


Route::get('/kas', [KasController::class, 'index'])->name('daftar.kas');
Route::get('/kas/add', [KasController::class, 'add'])->name('kas.add');
Route::post('/kas', [KasController::class, 'create']);
Route::put('/kas/{id}', [KasController::class, 'update']);
Route::get('/kas/{id}', [KasController::class, 'view']);


Route::get('/dana', [DanaController::class, 'index']);
