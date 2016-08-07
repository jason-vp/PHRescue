<?php
use App\Classes\Common;
/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

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

    Route::get('/usuarios/{id?}', 'UserController@index');
    
    Route::get('/veterinarios/{id?}', 'VeterinarianController@index');

    Route::get('/voluntarios/{type?}/{id?}', 'VolunteerController@searchIndex');
});
