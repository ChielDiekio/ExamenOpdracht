<?php

use App\Http\Controllers\Gamedevscontroller;
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

//Route::get('/', 'App\Http\Controllers\listcontroller@index' );
Route::resource('/', 'App\Http\Controllers\listcontroller');

Route::get('/games/{gamedev}', 'App\Http\Controllers\listcontroller@showdata');


//Route::get('/', function () {
//    return view('welcome');
//});
