<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DanaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\UserController;
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

// Route::middleware(['auth', 'has.role:1,2'])->group(function () {
//     Route::get('/', function () {
//         return view('content.dashboard');
//     });
// });



Route::middleware(['auth', 'has.role:2'])->group(function () {
    Route::get('/',[DashboardController::class,'index']);

    Route::get('/user', [UserController::class, 'index'])->name('siswa');
    Route::get('/user/add', [UserController::class, 'add']);
    Route::post('/user', [UserController::class, 'store']);
    Route::get('/user/{id}', [UserController::class, 'edit']);
    Route::put('/user/{id}', [UserController::class, 'update']);
    // Route::get('/siswa', [KasController::class, 'siswa'])->name('siswa');

    Route::get('/kas', [KasController::class, 'index'])->name('daftar.kas');
    Route::get('/kas/add', [KasController::class, 'add']);
    Route::post('/kas', [KasController::class, 'create']);
    Route::put('/kas/{id}', [KasController::class, 'update']);
    Route::get('/kas/{id}', [KasController::class, 'view'])->name('kas.view');

    Route::get('/dana', [DanaController::class, 'index']);
    Route::get('/pembayaran/{id}', [DanaController::class, 'edit'])->name('dana.keluar');
    Route::post('/pembayaran', [DanaController::class, 'update']);


    Route::get('/kategori', [KategoriController::class, 'create']);
    Route::post('/kategori', [KategoriController::class, 'store']);

    Route::get('/pengeluaran/add', [PengeluaranController::class, 'add']);
    Route::get('/pengeluaran', [PengeluaranController::class, 'index']);
    Route::post('/pengeluaran', [PengeluaranController::class, 'store']);
});

Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
