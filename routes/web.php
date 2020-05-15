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

Route::get('semua', 'HomeController@semua');
Route::get('kamar-tidur', 'HomeController@tidur');
Route::get('ruang-tamu', 'HomeController@tamu');
Route::get('ruang-makan', 'HomeController@makan');
Route::get('ruang-kerja', 'HomeController@kerja');
Route::get('dekorasi', 'HomeController@dekorasi');

Route::get('contact', 'HomeController@contact');
Route::get('single-blog', 'HomeController@single_blog');
Route::get('tracking', 'HomeController@tracking');

Route::get('/barang/upload', 'BarangController@upload')->name('upload');
Route::post('/barang/upload/proses', 'BarangController@proses_upload');

Route::get('confirmation', 'HomeController@confirmation');

Route::get('cart', 'PesanController@cart')->name('cart');
Route::delete('cart/{id}', 'PesanController@delete');
Route::get('confirm-checkout', 'PesanController@konfirmasi')->name('konfirmasi');

Route::post('pesan/{id}', 'PesanController@pesan')->name('pesan');

Route::get('checkout', 'HistoryController@checkout')->name('checkout');
Route::get('checkout/{id}', 'HistoryController@detail')->name('cdetail');





Route::get('kategori/{kategori}','KategoriController@index')->name('kategori.index');

Route::get('dashboard', 'PageController@dashboard')->name('dashboard')->middleware('auth');
Route::get('pengiriman', 'PageController@pengiriman')->name('pengiriman')->middleware('auth');
Route::get('pembayaran-admin', 'PageController@padmin')->name('padmin')->middleware('auth');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
    {
        Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    });

Route::group(['middleware' => 'auth'], function () 
{
	Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
    Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
    Route::get('users', ['as' => 'pages.users', 'uses' => 'PageController@users']);
});

Route::group(['middleware' => 'auth'], function () 
{
    Route::get('profile', ['as' => 'profile.index', 'uses' => 'ProfileController@index']);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::group(['middleware' => 'auth'], function ()
{
    Route::get('/create', 'BarangController@create');
    Route::get('barang','BarangController@index')->name('barang.index');
    Route::get('barang/{barang}', 'BarangController@show')->name('barang.show');
    Route::post('barang', 'BarangController@store')->name('barang.store');
    Route::get('barang/{barang}/edit', 'BarangController@edit')->name('barang.edit');
    Route::patch('barang/{barang}', 'BarangController@update')->name('barang.update');
    Route::delete('barang/{barang}','BarangController@destroy')->name('barang.destroy');
});

Route::get('detail/{namabarang}','DetailController@index')->name('detail.index');

Route::group(['middleware' => 'auth'], function () 
{
	Route::get('pengiriman','CheckoutController@index')->name('checkout.index');
});