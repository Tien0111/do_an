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

Route::group(['namespace' => 'Auth','prefix' => 'account'], function (){
    Route::post('login','LoginController@postLogin')->name('post.login');
    Route::post('register','RegisterController@postRegister')->name('post.register');
});
Route::get('','HomeController@index')->name('get.home');
Route::get('job/{slug}.html','JobController@index')->name('get.job');
