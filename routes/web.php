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
Route::post('/home', 'HomeController@postIndex');
Route::get('/actual/register', 'ActualController@register');
Route::post('/actual/register', 'ActualController@create');
Route::get('/actual/edit/{id}', 'ActualController@edit');
Route::post('/actual/edit/{id}', 'ActualController@update');
Route::get('/actual/{year}/{month}', 'ActualController@by_month');
Route::get('/actual/{year}', 'ActualController@by_year')->name('by_year');

Route::get('/budget/register', 'BudgetController@register');
Route::post('/budget/register', 'BudgetController@create');
Route::get('/budget/edit/{id}', 'BudgetController@edit');
Route::post('/budget/edit/{id}', 'BudgetController@update');
Route::get('/budget/{year}/{month}', 'BudgetController@show');

Route::get('/category/show' ,'CategoryController@show');
Route::post('/category/show' ,'CategoryController@updateCategory');
Route::get('/category/0' ,'CategoryController@getCategoryFlg0Json');
Route::get('/category/1' ,'CategoryController@getCategoryFlg1Json');

Route::get('/actual/{year}/{month}/item', 'ActualController@chartItems');
