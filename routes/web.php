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

Route::get('/', 'HomeController@index');
Route::get('/categories', 'HomeController@categories');


Route::post('contact_submit','MailController@submit');
Route::get('submit_ok','MailController@submit_ok');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
