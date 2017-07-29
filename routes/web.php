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
Route::get('/products', 'HomeController@categories');
Route::get('/products/{category_slug}', 'HomeController@category');
Route::get('/products/{category_slug}/{product_slug}', 'HomeController@product_detail');

Route::get('/news','HomeController@news');
Route::get('/articles','HomeController@articles');
Route::get('/articles/{slug}','HomeController@article');
Route::get('/pages/{slug}','HomeController@page');
Route::get('/contact_us','HomeController@contact_us');
Route::get('/custom_cases','HomeController@custom_cases');

Route::post('contact_submit','MailController@submit');
Route::get('submit_ok','MailController@submit_ok');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
