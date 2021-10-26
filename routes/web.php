<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\validator;
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

// Route::view('create','form' );

// Route::post('/save', function () {
//     echo 'welcome';
// });

Route::get('create', 'userController@create');
Route::post('save','userController@store');