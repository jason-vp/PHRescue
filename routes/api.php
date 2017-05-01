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

/*Route::get('/user', function (Request $request) {
    return Auth::guard('api')->user();
})->middleware('auth:api');*/

Route::model('users', 'User');
Route::resource('users', 'UserController', ['only' => ['update']]);

Route::get('/ping',function(){
    return "pong";
});
