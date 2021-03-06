<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('index');
// }); 

Route::post('/create',[
        'uses'=>'CarController@create',
        'as'=>'cars.create'
]);

Route::get('/',[
    'uses'=>'CarController@show',
    'as'=>'cars.show'

]);

Route::get('/cars/{car}/edit',[
    'uses'=>'CarController@edit',
    'as'=>'cars.edit'
]);

Route::post('/cars/{car}',[
    'uses'=>'CarController@update',
    'as'=>'cars.update'
]);

Route::delete('/cars/{car}',[
    'uses'=>'CarController@destroy',
    'as'=>'cars.delete'
]);