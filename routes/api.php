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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::apiResource('Category', 'App\Http\Controllers\ControllerCategori');

//Rutas De categorias
//Route::apiResource('categories','ControllerCategory');
Route::apiResource('Category','App\Http\Controllers\ControllerCategory');
//Route::get('category/{id}','CategoryController@show');
 
//slider
Route::get('posthome','PostController@sliderPost');

//Post
Route::get('categoryPost/{id}','PostController@CategoryPost');
Route::apiResource('posts','PostController');
