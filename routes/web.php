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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth','checkrole']], function () {


    Route::get('/', function () {
        //return view('welcome');
        return view('admin/baptismform');
    });

    Route::resource('churchbuidingfund', 'ChurchBuildingFundController');
    Route::resource('baptism', 'BaptismController');
    Route::resource('contactus', 'ContactUsController');
    Route::resource('carousngalry', 'CarouselnGalleryController');
    Route::get('create_gallery','CarouselnGalleryController@create_gallery')->name('create_gallery');
    Route::get('list_gallery','CarouselnGalleryController@list_gallery')->name('list_gallery');

    Route::get('ajxupdateStatus','CarouselnGalleryController@updateStatus')->name('ajxupdateStatus');
    Route::get('deletecoroselimg/{id}','CarouselnGalleryController@deleteCoroselimg')->name('deletecoroselimg');
});

Auth::routes();


