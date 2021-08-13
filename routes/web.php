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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/absensi', [App\Http\Controllers\AbsensiController::class, 'index'])->name('absensi');
// Route::get('penjualan.create', [App\Http\Controllers\PenjualanController::class, 'index'])->name('penjualan');

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/absensi', 'App\Http\Controllers\AbsensiController@index')->name('absensi');
// Route::get('penjualan.create', 'App\Http\Controllers\PenjualanController@index')->name('[penjualan]');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
	Route::get('vendor/event/calendar', ['as' => 'calendar.index', 'uses' => 'App\Http\Controllers\calendarController@index']);
	Route::get('penjualan/create', ['as' => 'penjualan.index', 'uses' => 'App\Http\Controllers\PenjualanController@index']);
	// Route::get('absensi', ['as' => 'absensi.index', 'uses' => 'App\Http\Controllers\AbsensiController@index']);
});

