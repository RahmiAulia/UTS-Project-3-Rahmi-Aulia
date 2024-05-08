<?php

use App\Http\Controllers\Api\DetailTransaksiControllerApi;
use App\Http\Controllers\Api\KategoriPembayaranApi;
use App\Http\Controllers\Api\KategoriProdukControllerApi;
use App\Http\Controllers\Api\PembayaranControllerApi;
use App\Http\Controllers\Api\PenggunaControllerApi;
use App\Http\Controllers\Api\ProdukApi;
use App\Http\Controllers\Api\ShippingControllerApi;
use App\Http\Controllers\Api\TransaksiControllerApi;
use App\Http\Controllers\Api\UlasanControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('pengguna', [PenggunaControllerApi::class,'index']);
Route::get('pengguna/{id}', [PenggunaControllerApi::class,'show']);
Route::post('pengguna', [PenggunaControllerApi::class,'store']);
Route::put('pengguna/{id}', [PenggunaControllerApi::class,'update']);
Route::delete('pengguna/{id}', [PenggunaControllerApi::class,'destroy']);
//Route::apiResource('pengguna', PenggunaControllerApi::class);

Route::get('produk', [ProdukApi::class, 'index']);
Route::get('produk/{id}', [ProdukApi::class, 'show']);

Route::get('transaksi', [TransaksiControllerApi::class, 'index']);
Route::post('transaksi', [TransaksiControllerApi::class, 'store']);
Route::put('transaksi/{id}', [TransaksiControllerApi::class, 'update']);
Route::get('transaksi/{id}', [TransaksiControllerApi::class, 'show']);

Route::get('detail-transaksi',[DetailTransaksiControllerApi::class, 'index']);
Route::post('detail-transaksi',[DetailTransaksiControllerApi::class, 'store']);

Route::apiResource('ulasan', UlasanControllerApi::class);

Route::get('pembayaran', [PembayaranControllerApi::class], 'index');
Route::post('pembayaran', [PembayaranControllerApi::class, 'store']);

Route::get('shipping', [ShippingControllerApi::class], 'index');
Route::post('shipping', [ShippingControllerApi::class, 'store']);


Route::get('kategori-produk', [KategoriProdukControllerApi::class,'index']);
Route::get('kategori-pembayaran', [KategoriPembayaranApi::class,'index']);
