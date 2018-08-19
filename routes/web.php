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

Auth::routes();


Route::group( ['middleware' => [ 'auth'] ], function () {

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/cv/edit/', 'CvController@edit')->name('cv.edit');
	Route::resource('cv','CvController');
	Route::resource('social','SocialController');
	Route::resource('experience','ExperienceController');
	Route::resource('education','EducationController');
	Route::resource('skill','SkillController');


});
