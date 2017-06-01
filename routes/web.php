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

Route::get('/login', function () {
    return view('login');
});

// Route::get('/answer', function () {
//     return view('question/answer');
// });
// Route::get('question/{UserQId}', 'QuestionController@indexid');

Auth::routes();

Route::get('/home', 'HomeController@index');

  Route::group(['middleware' => ['web']], function () {

  // Route::get('weekly/user', 'QuestionController@indexid');
  // Route::get('weekly', 'QuestionController@index');
  // Route::get('weekly/{id}', 'QuestionController@show');
  // Route::get('weeklyCreate', 'QuestionController@create');
  // Route::get('weekly/{id}/edit', 'QuestionController@edit');
  // Route::get('weekly/{id}/edit', 'QuestionController@update');
  // Route::resource('question', 'QuestionController') ;
  // Route::get('weekly/{id}/approve','QuestionController@updatestatusA');
  // Route::get('weekly/{id}/reject','QuestionController@updatestatusR');
  // Uses Auth Middleware

  Route::resource('user', 'UserController') ;

  //

  Route::get('weekly/user', 'WeeklyController@indexid');
  Route::get('weekly/{id}/approve','WeeklyController@updatestatusA');
  Route::get('weekly/{id}/reject','WeeklyController@updatestatusR');
  Route::get('weekly/{id}/print', 'WeeklyController@printReport');
  Route::get('weekly/{id}/comment','WeeklyController@updateComment');
  Route::get('weekly/{id}/day','WeeklyController@weeklyday');
  Route::resource('weekly', 'WeeklyController');


});




  // Route::patch('question/{id}/test', [
  //   'as' => 'questionstatus.update', 'uses' => 'QuestionController@updatestatus']);
  //       // Uses Auth Middleware
  //  });
