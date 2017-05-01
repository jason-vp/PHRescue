<?php
use App\Classes\Common;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/acogidas/{id?}/', 'ShelterHouseController@index');

    Route::get('/adoptantes/{type?}/{id?}', 'AdopterController@index');

    Route::get('/alta/{type?}', 'AnimalController@create');

    Route::get('/clinicas/{id?}', 'ClinicController@index');

    Route::get('/consulta/{type?}', 'AnimalController@search');

    Route::get('/correos', 'VolunteerController@MailIndex');

    Route::get('/ficha/{type}/{id}', 'AnimalController@edit');

    Route::get('/medicacion/{id?}', 'MedicationController@index');

    Route::get('/nonGratae/{type?}/{id?}', 'NonGrataController@index');

    Route::get('/panel', 'HomeController@index');

    Route::get('/', 'HomeController@index');

    Route::get('/paseadores/{id?}', 'DogWalkerController@index');

    Route::get('/seguimiento/{id?}/{management?}', 'FollowUpReportController@edit');

    Route::get('/seguimientos/{management?}', 'FollowUpReportController@search');

    Route::get('/usuarios/{id?}', 'UsersPageController@index');

    Route::get('/veterinarios/{id?}', 'VeterinarianController@index');

    Route::get('/voluntarios/{type?}/{id?}', 'VolunteerController@searchIndex');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
