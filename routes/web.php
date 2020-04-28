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

Route::get('/', 'PageController@index')->name('home');

Route::get('login', function(){
    return view('login');
})->name('login');

Route::post('loginAdmin', 'PageController@login')->name('loginAdmin');

Route::get('logout', 'PageController@logout')->name('logout');

Route::get('add', 'PageController@show')->name('add');
Route::post('store', 'PageController@store')->name('store');

Route::get('edit/{id}', 'PageController@edit')->name('edit');
Route::post('update/{id}', 'PageController@update')->name('update');
Route::get('cancel', 'PageController@cancel')->name('cancel');
Route::get('delete/{id}', 'PageController@destroy')->name('delete');


Route::get('mail', 'MailController@index')->name('mail');
Route::post('send', 'MailController@send')->name('send');
Route::post('subscribe', 'MailController@store')->name('subscribe');


Route::resource('home', 'PageController');


