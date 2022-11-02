<?php

use App\Http\Controllers\Api\AuthAction;
use App\Http\Controllers\Api\LogoutAction;
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

Route::post('/auth', AuthAction::class);
Route::post('/logout', LogoutAction::class);
