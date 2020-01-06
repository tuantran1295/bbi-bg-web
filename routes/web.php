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

Route::get('/', 'CompanyController@index');
Route::get('/category/{category}', 'CompanyController@getCompaniesByCategory');
Route::get('/company/{company}', 'CompanyController@show');
Route::get('/province/{province}', 'CompanyController@getCompaniesByProvince');
Route::get('/all', 'CompanyController@all');
Route::get('/featured', 'CompanyController@getFeatured');
Route::get('/new-connected', 'CompanyController@getNewConnected');
Route::post('/search', 'CompanyController@search');
?>
