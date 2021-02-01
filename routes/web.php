<?php

use App\Http\Controllers\MovieController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('','App\Http\Controllers\MovieController@home2');

Route::get('movie/{id}','App\Http\Controllers\MovieController@desc');

Route::get('genre/{id}','App\Http\Controllers\MovieController@genre');
