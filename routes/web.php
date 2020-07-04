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
    return view('login');
})->name('loginn');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('dashboard/payments', 'PaymentsController');
Route::resource('dashboard/ministries', 'MinistriesController');
Route::resource('dashboard/profile', 'ProfileController');
Route::resource('dashboard/users', 'UsersController');
Route::resource('dashboard/budgets', 'BudgetsController');
Route::get('/dashboard/recurrent', 'BudgetsController@recurrent')->name('recurrent');
