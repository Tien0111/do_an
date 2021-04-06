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
    Route::get('logout','LoginController@getLogout')->name('get.logout');
});
Route::get('','HomeController@index')->name('get.home');
Route::get('tim-kiem.html','SearchJobController@index')->name('get.search.job');
Route::get('job/nganh-nghe-{slug}.html','CareerController@index')->name('get.career.index');
Route::get('job/{slug}-{hashID}.html','JobController@index')->name('get.job')
    ->where(['slug' => '[a-z-]+','hashID' => '[a-z0-9A-Z]+']);

Route::group(['namespace' => 'Ajax','prefix' => 'ajax'], function (){
    Route::get('job/{hashID}','AjaxFavouriteJobController@addFavourite')->name('ajax_get.add.favourite');
    Route::post('job-ally','AjaxApplyJobController@applyJob')
        ->name('ajax_post.add.apply_job');
});


