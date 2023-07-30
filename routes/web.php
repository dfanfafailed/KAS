<?php

use App\Http\Controllers\DanaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kas', [KasController::class, 'index']);
Route::get('/kas/{id}', [KasController::class, 'view']);
Route::post('/kas', [KasController::class, 'create']);

Route::get('/dana', [DanaController::class, 'index']);
