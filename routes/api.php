<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('user/personal/{id}','UserController@storePersonal');
Route::post('user/skill/{id}','UserController@storeSkill');
Route::post('user/interest/{id}','UserController@storeInterest');
Route::post('user/certificate/{id}','UserController@storeCertificate');
Route::post('user/education/graduation/{id}','UserController@storeEducation');
Route::post('user/company/{id}','UserController@storeCompany');
Route::post('user/experience/{id}','UserController@storeExperience');
Route::delete('user/experience/{id}','UserController@destroyExperience');
Route::post('user/cover/{id}','UserController@storeCover');
Route::post('employer/search','UserController@searchCv');
Route::post('user/final/check/{id}','UserController@finalCheck')->name('finalCheck');
