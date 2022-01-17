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

Route::get('/', 'App\Http\Controllers\MainController@getMain')->name('main');

Route::middleware("auth")->group(function () {
    Route::get('/edit', 'App\Http\Controllers\EditController@showEdit')->name('edit');
    Route::post('/edit-act', 'App\Http\Controllers\ProfileController@update')->name('edit-act');
    Route::get('/logout', 'App\Http\Controllers\AuthController@showLogOut')->name('logout');
});
Route::middleware("guest")->group(function () {
    Route::get('/login', 'App\Http\Controllers\AuthController@showLogIn')->name('login');
    Route::post('/login-act', 'App\Http\Controllers\AuthController@logIn')->name('login-act');

    Route::get('/registration', 'App\Http\Controllers\AuthController@showRegistration')->name('registration');
    Route::post('/registration-act', 'App\Http\Controllers\AuthController@registration')->name('registration-act');

});

