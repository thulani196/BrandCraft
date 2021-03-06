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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/home/requests/{request}/archive','HandleRequests@archiveRequest');
Route::get('/home/requests/{request}/delete','HandleRequests@deleteRequest');
Route::get('/home/requests/archived/{request}/restore','HandleRequests@restoreRequest');
Route::get('/home/requests/archived/{request}/delete','HandleRequests@deleteRequest');
Route::get('/home/requests/archived','HandleRequests@archived');


Route::resource('/home/adverts', 'AdvertsController');
Route::resource('/home/admins', 'AdminsController');
Route::resource('/requests', 'RequestsController');
Route::resource('home/requests', 'ManageRequests');
Route::resource('/products', 'AdvertViewController');

