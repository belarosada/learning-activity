<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'network'], function () {
//   Route::get('/', 'NetworkController@index')->name('network');
//   Route::get('json','NetworkController@json');
//   Route::get('add','NetworkController@add');
//   Route::post('store','NetworkController@store');
//   Route::get('view/{id}','NetworkController@view');
//   Route::post('view/update','NetworkController@update');
//   Route::get('delete/{id}','NetworkController@delete');
//   Route::get('report', 'ReportController@index');
//   Route::get('export','ReportController@exportNetwork');
// });


Route::get('/', 'HomeController@index')->name('index');
