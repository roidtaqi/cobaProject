<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//     return view('pages.home_login');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('logout', 'HomeController@logout');
Route::get('edit', 'HomeController@edit');
Route::get('blog', 'HomeController@blog');
Route::get('lupa', 'HomeController@lupa')->name('lupa');

Route::get('semua', 'HomeController@semua');
Route::get('kamar-tidur', 'HomeController@tidur');
Route::get('ruang-tamu', 'HomeController@tamu');
Route::get('ruang-makan', 'HomeController@makan');
Route::get('ruang-kerja', 'HomeController@kerja');
Route::get('dekorasi', 'HomeController@dekorasi');

Route::get('contact', 'HomeController@contact');
Route::get('single-blog', 'HomeController@single_blog');
Route::get('faq', 'HomeController@faq');
Route::get('syarat', 'HomeController@syarat');
Route::get('kebijakan', 'HomeController@kebijakan');
Route::get('tracking', 'HomeController@tracking');

Route::get('/barang/upload', 'BarangController@upload')->name('upload');
Route::post('/barang/upload/proses', 'BarangController@proses_upload');

Route::get('confirmation', 'HomeController@confirmation');

// Route::get('cart', 'PesanController@cart');
// Route::delete('cart/{id}', 'PesanController@delete');
// Route::get('confirm-cart', 'PesanController@konfirmasi');

// Route::group(['middleware' => 'auth'], function (){
//     Route::post('pesan/{id}', 'PesanController@pesan');
// });

// Route::get('checkout', 'HistoryController@checkout');
// Route::get('confirm-checkout', 'HistoryController@konfirmasi');

// Route::get('riwayat', 'HistoryController@riwayat');
// Route::get('riwayat/{id}', 'HistoryController@detail');

Route::get('cart', 'PesanController@cart');
Route::delete('cart/{id}', 'PesanController@delete');
Route::get('confirm-cart', 'PesanController@konfirmasi');

Route::post('pesan/{id}', 'PesanController@pesan');

Route::get('checkout', 'PesanController@checkout');
Route::get('confirm-checkout', 'PesanController@konfirmasi1');

Route::get('riwayat', 'PesanController@riwayat');
Route::group(['middleware' => 'auth'], function () 
{
Route::get('riwayat/{id}', 'PesanController@detail');
Route::get('selesai/{id}', 'PesanController@selesai');
});

Route::group(['middleware' => 'auth'], function () 
{
Route::get('lacak/{id}', 'PesanController@kirim');
Route::get('bayar/{id}', 'PesanController@bayar')->name('bayar');
Route::post('bayar/proses/{id}', 'PesanController@proses_upload')->name('bayar.upload');
});

Route::get('kategori/{kategori}','KategoriController@index')->name('kategori.index');

Route::get('dashboard', 'PageController@dashboard')->name('dashboard')->middleware('auth','can:manage-users');
Route::get('pembayaran-admin', 'PageController@padmin')->name('padmin')->middleware('auth','can:manage-users');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
    {
        Route::resource('/users', 'UsersController', ['except' => ['create', 'store']]);
    });

Route::group(['middleware' => 'auth'], function () 
{
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps'])->middleware('can:manage-users');
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables'])->middleware('can:manage-users');
    Route::get('users', ['as' => 'pages.users', 'uses' => 'PageController@users'])->middleware('can:manage-users');
});

Route::group(['middleware' => 'auth'], function () 
{
    Route::get('profile', ['as' => 'profile.index', 'uses' => 'ProfileController@index'])->middleware('can:manage-users');
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit'])->middleware('can:manage-users');
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update'])->middleware('can:manage-users');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password'])->middleware('can:manage-users');
});

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/create', 'BarangController@create')->middleware('can:manage-users');
    Route::get('barang','BarangController@index')->name('barang.index')->middleware('can:manage-users');
    Route::get('barang/{barang}', 'BarangController@show')->name('barang.show')->middleware('can:manage-users');
    Route::post('barang', 'BarangController@store')->name('barang.store')->middleware('can:manage-users');
    Route::get('barang/{barang}/edit', 'BarangController@edit')->name('barang.edit')->middleware('can:manage-users');
    Route::patch('barang/{barang}', 'BarangController@update')->name('barang.update')->middleware('can:manage-users');
    Route::delete('barang/{barang}','BarangController@destroy')->name('barang.destroy')->middleware('can:manage-users');
});

Route::get('detail/{namabarang}','DetailController@index')->name('detail.index');

Route::group(['middleware' => 'auth'], function () 
{
    Route::get('pembelian','CheckoutController@index')->name('checkout.index')->middleware('can:manage-users');
    Route::get('pembelian/{pesanan}', 'CheckoutController@show')->name('checkout.show')->middleware('can:manage-users');
    Route::get('pembelian/{pesanan}/edit', 'CheckoutController@edit')->name('checkout.edit')->middleware('can:manage-users');
    Route::patch('pembelian/{pesanan}', 'CheckoutController@update')->name('checkout.update')->middleware('can:manage-users');
});


Route::group(['middleware' => 'auth'], function () 
{
    Route::get('pengiriman', 'PengirimanController@index')->name('pengiriman.index')->middleware('can:manage-users');
    Route::get('pengiriman/{pesanan}', 'PengirimanController@show')->name('pengiriman.show')->middleware('can:manage-users');
    Route::post('pengiriman', 'PengirimanController@store')->name('pengiriman.store')->middleware('can:manage-users');
    Route::get('pengiriman/{pesanan}/edit', 'PengirimanController@edit')->name('pengiriman.edit')->middleware('can:manage-users');
    Route::patch('pengiriman/{pesanan}', 'PengirimanController@update')->name('pengiriman.update')->middleware('can:manage-users');
});