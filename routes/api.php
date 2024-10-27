<?php

use App\Models\Desa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DesaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RwrtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengajuanController;

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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('register',[UserController::class,'register']);
Route::post('login',[UserController::class,'login']);

//barang
Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang/store', [BarangController::class, 'store']);
Route::get('/barang/show/{id}', [BarangController::class, 'show']);
Route::patch('/barang/update/{id}', [BarangController::class, 'update']);
Route::delete('/barang/destroy/{id}', [BarangController::class, 'destroy']);

//kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/show/{id}', [KategoriController::class, 'show']);
Route::patch('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::delete('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

// ADMIN
//WARGA
Route::get('/warga', [WargaController::class, 'index']);
Route::post('/warga/store', [WargaController::class, 'store']);
Route::get('/warga/show/{id}', [WargaController::class, 'show']);
Route::patch('/warga/update/{id}', [WargaController::class, 'update']);
Route::delete('/warga/destroy/{id}', [WargaController::class, 'destroy']);

//DESA
Route::get('/desa', [DesaController::class, 'index']);
Route::post('/desa/store', [DesaController::class, 'store']);
Route::get('/desa/show/{id}', [DesaController::class, 'show']);
Route::patch('/desa/update/{id}', [DesaController::class, 'update']);
Route::delete('/desa/destroy/{id}', [DesaController::class, 'destroy']);


//rwrt
Route::get('/rwrt', [RwrtController::class, 'index']);
Route::post('/rwrt/store', [RwrtController::class, 'store']);
Route::get('/rwrt/show/{id}', [RwrtController::class, 'show']);
Route::patch('/rwrt/update/{id}', [RwrtController::class, 'update']);
Route::delete('/rwrt/destroy/{id}', [RwrtController::class, 'destroy']);

//Role
Route::get('/role', [RoleController::class, 'index']);
Route::post('/role/store', [RoleController::class, 'store']);
Route::get('/role/show/{id}', [RoleController::class, 'show']);
Route::patch('/role/update/{id}', [RoleController::class, 'update']);
Route::delete('/role/destroy/{id}', [RoleController::class, 'destroy']);

//USER
Route::get('/user', [UserController::class, 'index']);
Route::post('/user/store', [UserController::class, 'store']);
Route::get('/user/show/{id}', [UserController::class, 'show']);
Route::patch('/user/update/{id}', [UserController::class, 'update']);
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy']);
// PENGAJUAN
Route::get('/pengajuan', [PengajuanController::class, 'index']);
Route::post('/pengajuan/store', [PengajuanController::class, 'store']);
Route::get('/pengajuan/show/{id}', [PengajuanController::class, 'show']);
Route::patch('/pengajuan/update/{id}', [PengajuanController::class, 'update']);
Route::delete('/pengajuan/destroy/{id}', [PengajuanController::class, 'destroy']);
Route::patch('/pengajuan/selesai/', [PengajuanController::class, 'markAsCompleted']);