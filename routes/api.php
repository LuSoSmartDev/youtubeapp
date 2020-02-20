<?php

use Illuminate\Http\Request;
use App\Http\Controllers\ArticleController;
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