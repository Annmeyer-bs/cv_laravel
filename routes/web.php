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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'App\Http\Controllers\MainController@getMain')->name('main');


Route::middleware("auth")->group(function () {
    Route::get('/logout', 'App\Http\Controllers\AuthController@getLogout')->name('logout');
});
Route::middleware("guest")->group(function () {
    Route::get('/login', 'App\Http\Controllers\AuthController@getLogin')->name('login');
    Route::post('/login-act', 'App\Http\Controllers\AuthController@postLogin')->name('login-act');

    Route::get('/register', 'App\Http\Controllers\AuthController@getRegister')->name('register');
    Route::post('/register-act', 'App\Http\Controllers\AuthController@postRegister')->name('register-act');

});

