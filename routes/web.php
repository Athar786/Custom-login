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
Route::get('register','Auth\RegisterController@index')->name('register');
Route::post('register', 'Auth\RegisterController@store');
Route::get('login','Auth\LoginController@index')->name('login');
Route::post('login','Auth\LoginController@authenticate');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('home','HomeController@index')->name('home');

