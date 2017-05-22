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

  Route::get('question/user', 'QuestionController@indexid');

  // Route::get('question/answer/{question}', 'QuestionController@createAns');
  // Route::post('question/answer/{question}', 'QuestionController@storeAns')->name('question.storeAns');

  Route::resource('question', 'QuestionController') ;

  // Route::resource('question/{id}', 'QuestionController@upStatindexusApp') ;
  Route::get('question/{id}/approve','QuestionController@updatestatusA');
  Route::get('question/{id}/reject','QuestionController@updatestatusR');
        // Uses Auth Middleware

  Route::resource('user', 'UserController') ;

});




  // Route::patch('question/{id}/test', [
  //   'as' => 'questionstatus.update', 'uses' => 'QuestionController@updatestatus']);
  //       // Uses Auth Middleware
  //  });
