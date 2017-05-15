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

Auth::routes();

// Return the application's home page
Route::get('/', 'PagesController@index')->name('app.home');

// Profiles resource route group
Route::get('/search/debts', 'ProfilesController@searchIndex')->name('app.debt.search');
Route::post('profiles/search', 'ProfilesController@search')->name('profiles.search');
Route::resource('profiles', ProfilesController::Class);

// Debt resource route group
Route::get('debts', 'DebtsController@index')->name('debts.index');
Route::get('debts/download', 'DebtsController@download')->name('debts.download');



