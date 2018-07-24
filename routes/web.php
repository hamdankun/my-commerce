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

/**
 * Ini adalah routing yang pertama kali di akses
 */
Route::redirect('/', '/home');

/**
 * Ini adalah routing untuk menampilkan halaman home
 */
Route::get('/home', 'HomeController@index')->name('home');

/**
 * Ini adalah routing untuk menampilkan halaman products
 */
Route::name('products.')->prefix('products')->group(function() {
	Route::get('/', 'ProductController@index')->name('index');	
});

Route::name('auth.')->namespace('Auth')->prefix('auth')->group(function() {
	Route::post('/login', 'AuthController@login')->name('login');	
	Route::post('/logout', 'AuthController@logout')->name('logout');	
});

/**
 * Ini adalah routing untuk menampikan halaman member
 */
Route::name('member.')->prefix('member')->group(function() {
	Route::get('/', 'MemberController@index')->name('index');	
});

Route::prefix('test')->group(function() {
	Route::get('/test-database-connection', function() {
    	dd(['Connection Information' => DB::connection()->getPdo(), 'Database Name' => DB::connection()->getDatabaseName()]);
	});
});