<?php

use Illuminate\Http\Request;
use App\Http\Controllers\UVideoController;
use App\Http\Controllers\EmailAccountController;

use App\Article;
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

Route::get('getemail','EmailAccountController@getrandom');
Route::get('getvideo','UVideoController@get_random_video');