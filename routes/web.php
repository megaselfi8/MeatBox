<?php

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

// Route::get('/', function () {
//     return view('index');
// });

//Index
Route::get('/','IndexController@index');


// List Produk
Route::get('/produk/daging','ListProdukController@index');
Route::get('/produk/daging/search-produk','ListProdukController@searchProduk');


// Cart / Nota
Route::get('/cart','CartController@cart');
Route::get('/cart/plus','CartController@plusQty');
Route::get('/cart/minus','CartController@minQty');
Route::get('/cart/checkout/{$t_nota_id}','CartController@checkout');

//Invoice
Route::get('/invoice/{$t_nota_id}', 'InvoiceController@index');
Route::get('/invoice/preview/{$t_nota_id}', 'InvoiceController@previewPdf');
Route::get('/invoice/print/{$t_nota_id}', 'InvoiceController@printPdf');


// Login
Route::get('/login','GuestController@login');
Route::post('/login/action','GuestController@loginAction');

// Register
Route::get('/register','AkunController@register');
Route::post('/akun/action','AkunController@uploadAction');

Route::get('/akun','AkunController@index');
Route::get('/akun','AkunController@cari');
Route::get('/akun/detail/{id}','AkunController@detail');
Route::get('/akun/edit_akun/{id}','AkunController@edit');
Route::post('/akun/update','AkunController@update');
Route::get('/akun/hapus/{id}','AkunController@delete');

// Admin Inventory
Route::get('/dashboard', 'AdminDashboardController@index');
Route::get('/signout','AdminDashboardController@signOut');

Route::get('/produk','ProdukController@index');
Route::get('/produk','ProdukController@cari');
Route::get('/produk-tambah_produk','ProdukController@tambah');
Route::post('/produk/action','ProdukController@uploadAction');
Route::get('/produk/detail/{id}','ProdukController@detail');
Route::get('/produk/edit_produk/{id}','ProdukController@edit');
Route::post('/produk/update','ProdukController@update');
Route::get('/produk/hapus_produk/{id}','ProdukController@delete');

Route::get('/kategori','KategoriController@index');
Route::get('/kategori','KategoriController@cari');
Route::post('/kategori/store','KategoriController@store');
Route::get('/kategori-tambah','KategoriController@tambah');
Route::get('/kategori/edit/{id}','KategoriController@edit');
Route::post('/kategori/update','KategoriController@update');
Route::get('/kategori/hapus/{id}','KategoriController@hapus');

//grafik
Route::get('/grafik','ApiDashboardController@index');
Route::get('/produk/grafik','ApiDashboardController@getLaporanPendapatan');
