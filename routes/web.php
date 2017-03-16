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
    return view('layouts/app');
});

Route::get('/login', function () {
    return view('login');
});
// Route::get('question/{UserQId}', 'QuestionController@indexid');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['web']], function () {
  Route::get('question/user', 'QuestionController@indexid');
  Route::post('question/{question}', 'QuestionController@storeAns');
  Route::resource('question', 'QuestionController') ;
        // Uses Auth Middleware
   });
