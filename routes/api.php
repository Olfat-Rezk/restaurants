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
//
//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('sandwiches','SandwicheController@index');




    Route::get('/view_admin', 'Api\AdminController@view_admin');

    Route::get('view_invoice/', 'Api\MenuController@view_invoice');
Route::post('/contact', 'Api\ContactController@contact');


