<?php

use App\Http\Controllers\DanaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengeluaranController;
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

Route::get('/siswa', [KasController::class, 'siswa'])->name('siswa');

Route::get('/kas', [KasController::class, 'index'])->name('daftar.kas');
Route::get('/kas/add', [KasController::class, 'add'])->name('kas.add');
Route::post('/kas', [KasController::class, 'create']);
Route::put('/kas/{id}', [KasController::class, 'update']);
Route::get('/kas/{id}', [KasController::class, 'view'])->name('kas.view');

Route::get('/dana', [DanaController::class, 'index']);
Route::get('/pembayaran/{id}', [DanaController::class, 'add']);
Route::post('/pembayaran', [DanaController::class, 'store']);


Route::get('/kategori', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);

Route::get('/pengeluaran/add', [PengeluaranController::class, 'add']);
Route::get('/pengeluaran', [PengeluaranController::class, 'index'])->name('dana.keluar');
Route::post('/pengeluaran', [PengeluaranController::class, 'store']);
