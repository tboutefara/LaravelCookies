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

Route::get('/', 'App\Http\Controllers\MyController@index');
Route::get('/subscribe', 'App\Http\Controllers\MyController@subscribe');
Route::get('/unsubscribe', 'App\Http\Controllers\MyController@unsubscribe');
