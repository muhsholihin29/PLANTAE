<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::
// middleware('auth:api')->
namespace('App\Http\Controllers')->
prefix('v2')->group(function () {
	Route::prefix('task')->group(function () {
		Route::get('/', 'api\ApiTaskController@index');
		Route::get('{id}', 'api\ApiTaskController@getById');
		Route::post('/', 'api\ApiTaskController@create');
		Route::get('{id}/edit', 'api\ApiTaskController@edit');
		Route::put('{id}', 'api\ApiTaskController@update');
		Route::post('/del', 'api\ApiTaskController@delete');
	});
});