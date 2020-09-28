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
    return view('user.index');
})->name('index');
Route::get('/reset-password', function () {
    return view('auth.passwords.reset');
})->name('resetPassword');
Auth::routes();

Route::get('/user-job-seeker/{id}', 'UserController@index')->name('job-seeker-home')->middleware('auth');
Route::get('/user-job-seeker/edit/{id}', 'UserController@editInfo')->name('job-seeker-home-edit')->middleware('auth');
Route::get('/user-employer/{id}', 'UserController@index')->name('employer-home')->middleware('auth');
Route::get('/home', 'UserController@loginRedirect')->name('login-redirect');
Route::get('/choose-template/{id}', function(){
    return view('user.choose_template');
})->middleware('auth');
Route::get('/template1/{id}','UserController@template1')->name('template1')->middleware('auth');  
Route::get('/template2/{id}','UserController@template2')->name('template2')->middleware('auth');  
Route::get('/cover1/{id}','UserController@cover1')->name('cover1')->middleware('auth');  
Route::get('/cover2/{id}','UserController@cover2')->name('cover2')->middleware('auth');  
Route::post('verify-email','UserController@verify')->name('verifyEmail');  
Route::post('password-update','UserController@passwordUpdate')->name('passwordUpdate');  
 
