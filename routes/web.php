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
// Return the application's debts search page
Route::get('/search/debts', 'PagesController@search')->name('app.debt.search');


// Profiles resource route group
Route::post('profiles/search', 'ProfilesController@search')->name('profiles.search');
Route::resource('profiles', ProfilesController::Class);

// Debt resource route group
Route::resource('debts', DebtsController::Class);
