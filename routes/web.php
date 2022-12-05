<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeagueOneController;

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

Route::get('/', 'App\Http\Controllers\LeagueOneController@top');
Route::get('/japan', 'App\Http\Controllers\LeagueOneController@japan');