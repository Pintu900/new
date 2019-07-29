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

Auth::routes();


Route::get('/', 'HomeController@index');
Route::get('/questions', 'HomeController@index');

Route::get('/create','QuestionController@create')->middleware('auth');
Route::post('/create','QuestionController@store')->name('store1');


Route::get('/question/{id}/show','QuestionController@show')->middleware('auth')->name('show');
Route::get('/question/{task}/edit','QuestionController@edit')->middleware('can:question-edit,task');

Route::post('/question/answer/store','AnswerController@store')->middleware('auth')->name('answer.store');
Route::get('/index',function(){
  return view('screen');
});

Route::get('/search','SearchController@search');
Route::post('/question/{id}/upvote','QuestionVoteController@upVote');
Route::post('/question/{id}/downvote','QuestionVoteController@downVote');
Route::get('/pdf','PdfController@pdfGenerator');
Route::get('users/export', 'UserController@export');

Route::get('product', 'RazorpayController@index');
Route::post('paysuccess', 'RazorpayController@razorPaySuccess');
Route::post('razor-thank-you', 'RazorpayController@thankYou');
Route::get('/quiz','QuestionController@getQuestion');

// 
