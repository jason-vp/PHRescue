<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

Route::model('users', 'User');
Route::resource('users', 'UserController', ['only' => ['update']]);
Route::put('users/{user}/change-password', 'UserController@changePassword');

Route::resource('animals', 'AnimalsController');
Route::model('photo', 'App\AnimalPhoto');
Route::resource('animals.photos', 'AnimalPhotosController', ['only' => ['create', 'destroy']]);
Route::put('animals/{animal}/favorite-photo/{animalPhoto}', 'AnimalsController@updateFavoritePhoto');

Route::get('/ping',function(){
    return "pong";
});
