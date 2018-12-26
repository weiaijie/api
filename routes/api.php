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


// Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function(){
//     Route::get('/user', function( Request $request ){
//         return $request->user();
//     });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cafes', 'API\CafesController@getCafes');
Route::post('/cafes', 'API\CafesController@postNewCafe');
Route::get('/cafes/{id}', 'API\CafesController@getCafe'); 


//商城api
Route::get('/shops', 'API\ShopsController@getShops');
Route::post('/shops', 'API\ShopsController@postNewShop');
Route::get('/shops/{id}', 'API\ShopsController@getShop'); 
Route::get('/goodsList', 'API\ShopsController@goodsList'); 


// });