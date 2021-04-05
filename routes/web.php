<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    //return view('welcome');
    return view('/layout/main');
	});
Route::get('/home', function () {
    //return view('welcome');
    return view('/layout/main');
	});
Route::get('/about', function () {
    //return view('welcome');
    return view('/layout/about');
	});
Route::resource('/kategori','KategoriController');
Route::get('/kategori','KategoriController@index')->name('kategori');
Route::get('/kategori_menu','KategoriController@show')->name('menu');


Route::resource('/menu','MenuController');
Route::get('/menu','MenuController@index')->name('menu');
Route::get('/pilihkategori','MenuController@index')->name('menu');
Route::get('/menu_makanan','MenuController@show')->name('menu');
Auth::routes();

Route::resource('/KategorimenuDiet','DietKategoriController');
Route::get('/KategorimenuDiet','DietKategoriController@index')->name('kategori_diet');

Route::resource('/MenuDiet','MenuDietController');
Route::get('/MenuDiet','MenuDietController@index')->name('menu_diet');

Route::resource('/KategoriTipsTrik','TiptrikKategoriController');
Route::get('/KategoriTipsTrik','TiptrikKategoriController@index')->name('kategori_tipstrik');

Route::resource('/tips-and-trik','TipstrikController');
Route::get('/tips-and-trik','TipstrikController@index')->name('Tipstrik');

Route::get('/tdee', 'TdeeController@index')->name('tdee.index');
Route::post('/new/tdee', 'TdeeController@store')->name('tdee.store');
Route::get('/tips-trik_','TipstrikController@edit')->name('Tipstrik');

Route::resource('/vid','VideoController')->middleware('auth');
Route::get('/vid','VideoController@index')->name('video');
Route::get('/vid_','VideoController@see')->name('video');
Route::get('/video_link','VideoController@show')->name('video');

Route::resource('/store','PesananControler');
Route::get('/store','PesananControler@index')->name('kategori');

Route::get('/transaksi', function () {
    //return view('welcome');
    return view('/store/transaksi');
	});
// Route::get('/home', function () {
//     //return view('welcome');
//     return view('/layout.main');
// });






// Route::get('/home', 'HomeController@index')->name('home');
