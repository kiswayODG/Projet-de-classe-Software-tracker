<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogicielController;
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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', [RegisterController::class,'show'])->name('register');
        Route::post('/register', [RegisterController::class,'register'])->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', [LoginController::class, 'show'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */

        Route::get('/', 'HomeController@index')->name('accueil');

        Route::get('/dashboard', 'AdminController@index')->name('dashboard');
        Route::resource('/users','UserController');
        Route::resource('logiciel','LogicielController');
        
Route::get('/logiciel/{id}/upd', 'LogicielController@update')->name('logiciel.update');
        Route::get('userDetail','UserController@detail')->name('userDetail');
        Route::get('/logout', 'LogoutController@perform')->name('logout');
    });

    Route::get('/get.chart.datas', 'LogicielController@getDataByTypeSoft')->name('cdatas');
    Route::get('/get.chart.datasCat', 'LogicielController@getDataByCatSoft');
    Route::get('/userDetail', 'UserController@userDetail')->name('userDetail');
});
