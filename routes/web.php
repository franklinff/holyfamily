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

Route::get('/', function () {
    //return view('welcome');
    return view('admin/baptismform');
});


Route::resource('baptism', 'BaptismController');
Route::resource('carousngalry', 'CarouselnGalleryController');
Route::resource('contactus', 'ContactUsController');


Route::get('create_gallery','CarouselnGalleryController@create_gallery')->name('create_gallery');
Route::get('list_gallery','CarouselnGalleryController@list_gallery')->name('list_gallery');


Route::get('ajxupdateStatus','CarouselnGalleryController@updateStatus')->name('ajxupdateStatus');
Route::get('deletecoroselimg/{id}','CarouselnGalleryController@deleteCoroselimg')->name('deletecoroselimg');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
