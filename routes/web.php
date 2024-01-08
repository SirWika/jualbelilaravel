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

use App\Http\Controllers\indexcontroller;

Route::get('/index', [indexcontroller::class, 'index']);
Route::get('/index/{id}', [indexcontroller::class, 'show']);

use App\Http\Controllers\shirtcontroller;

Route::get('/shirt', [shirtcontroller::class, 'index']);
Route::get('/shirt/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail', [shirtcontroller::class, 'anotherPage']);
Route::get('/detail/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail1', [shirtcontroller::class, 'anotherPage1']);
Route::get('/detail1/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail2', [shirtcontroller::class, 'anotherPage2']);
Route::get('/detail2/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail3', [shirtcontroller::class, 'anotherPage3']);
Route::get('/detail3/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail4', [shirtcontroller::class, 'anotherPage4']);
Route::get('/detail4/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail5', [shirtcontroller::class, 'anotherPage5']);
Route::get('/detail5/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail6', [shirtcontroller::class, 'anotherPage6']);
Route::get('/detail6/{id}', [shirtcontroller::class, 'show']);

Route::get('/detail7', [shirtcontroller::class, 'anotherPage7']);
Route::get('/detail7/{id}', [shirtcontroller::class, 'show']);

use App\Http\Controllers\shopcontroller;

Route::get('/shop', [shopcontroller::class, 'index']);
Route::get('/shop/{id}', [shopcontroller::class, 'show']);

Route::get('/contact', function () {
    return view('landing.contact');
});

Route::get('/loginuser', function () {
    return view('dashboard.user.login');
});

Route::get('/cart', function () {
    return view('dashboard.user.cart');
});
Route::get('/checkout', function () {
    return view('dashboard.user.checkout');
});

Route::post('/add-to-cart', [OrderController::class, 'insertorder'])->name('insertorder');

use App\Http\Controllers\authcontroller;
Route::get('/loginuser',[authcontroller::class,'login'])->name('loginuser');
Route::post('/authuser',[authcontroller::class,'authlogin'])->name('authlogin');;
Route::post('/logout1', [authcontroller::class, 'logout1'])->name('logout1');

route::post('/data-order','CartController@index')->name('data-order');