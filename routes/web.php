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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('thank','ThankController@thanks');

// Route::get('form', 'FormController@index');
 
// 追加
Route::get('survey', 'SurveysController@survey'); // ①
// Route::controller('survey', 'SurveysController@survey');
 
// Route::get('survey/{id}', 'FormController@show'); // (a)

// formがsubmitされた時のDBへの保存処理
Route::post('list', 'SurveysController@store');
// Route::get('survey', 'SurveysController');
// Route::get('list', 'ListsController@select');