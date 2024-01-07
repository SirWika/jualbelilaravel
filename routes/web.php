<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\DiskonController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\StaffController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/tambahproduk', [ProdukController::class, 'tambahproduk']);
Route::post('/insertproduk', [ProdukController::class, 'insertproduk'])->name('insertproduk');
Route::get('/editdataproduk/{id_produk}', [ProdukController::class, 'tampildata']);
Route::post('/updatedataproduk/{id_produk}', [ProdukController::class, 'updatedata']);
Route::get('/deletedataproduk/{id_produk}', [ProdukController::class, 'deletedata']);

Route::get('/pelanggan', [PelangganController::class, 'index']) ->name('pelanggan');
Route::get('/tambahpelanggan', [PelangganController::class, 'tambahpelanggan']);
Route::post('/insertpelanggan', [PelangganController::class, 'insertpelanggan']) -> name('insertpelanggan');
Route::get('/editdatapelanggan/{id_user}', [PelangganController::class, 'tampildata']);
Route::post('/updatedatapelanggan/{id_user}', [PelangganController::class, 'updatedata']);
Route::get('/deletedatapelanggan/{id_user}', [PelangganController::class, 'deletedata']);

Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::get('/tambahstaff', [StaffController::class, 'tambahstaff']);
Route::post('/insertstaff', [StaffController::class, 'insertstaff'])->name('insertstaff');
Route::get('/editdatastaff/{id_staff}', [StaffController::class, 'tampildata']);
Route::post('/updatedatastaff/{id_staff}', [StaffController::class, 'updatedata']);
Route::get('/deletedatastaff/{id_staff}', [StaffController::class, 'deletedata']);

Route::get('/diskon', [DiskonController::class, 'index'])->name('diskon');
Route::get('/tambahdiskon', [DiskonController::class, 'tambahdiskon']);
Route::post('/insertdiskon', [DiskonController::class, 'insertdiskon'])->name('insertdiskon');
Route::get('/editdatadiskon/{id_diskon}', [DiskonController::class, 'tampildata']);
Route::post('/updatedatadiskon/{id_diskon}', [DiskonController::class, 'updatedata']);
Route::get('/deletedatadiskon/{id_diskon}', [DiskonController::class, 'deletedata']);

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/tambahorder', [OrderController::class, 'tambahorder']);
Route::post('/insertorder', [OrderController::class, 'insertorder'])->name('insertorder');
Route::get('/editdataorder/{id_order}', [OrderController::class, 'tampildata'])->name('editorder');
Route::post('/updatedataorder/{id_order}', [OrderController::class, 'updatedata']);
Route::get('/deletedataorder/{id_order}', [OrderController::class, 'deletedata']);

Route::get('/detail-transaksi', [DetailController::class, 'index'])->name('detail-transaksi');
Route::get('/editdatadetail/{id_transaksi}', [DetailController::class, 'tampildata'])->name('editdetail');
Route::put('/updatedatadetail/{id_transaksi}', [DetailController::class, 'updatedata']);
Route::get('/deletedatadetail/{id_transaksi}', [DetailController::class, 'deletedata']);
Route::get('/cetaktransaksi', [DetailController::class, 'cetaktransaksi']);

Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/authlogin',[LoginController::class,'authlogin'])->name('authlogin');;
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
