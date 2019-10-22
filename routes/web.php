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

Route::get('/', 'HomeController@home');
Route::post('/set-home', 'HomeController@setHome');
Route::any('/basic-info', 'HomeController@showBasicForm');
Route::post('/set-basic', 'HomeController@setBasic');
Route::any('/campaign-type', 'HomeController@social_ppc');
Route::get('/social', 'HomeController@social');
Route::get('/ppc', 'HomeController@ppc');
//storage routes
Route::post('/store-social', 'HomeController@storeSocial');
Route::any('/store-ppc', 'HomeController@storePPC');
//thankms
Route::get('/thanks', 'HomeController@thanks');

//voyager routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('download/{id}', 'BriefController@pdf')->name('pdf');
    Route::get('acknowledge/{id}', 'BriefController@acknowledge')->name('acknowledge');
    Route::get('questions/{id}', 'BriefController@questions')->name('questions');
    Route::get('send-estimate/{id}', 'BriefController@estimateSent')->name('estimateSent');
    Route::get('approved/{id}', 'BriefController@estimateApproved')->name('estimateApproved');
});

Route::get('/download-approved', 'BriefController@downloadAllApproved')->name('allApproved');
Route::get('/download-not-approved', 'BriefController@downloadNotApproved')->name('notApproved');
