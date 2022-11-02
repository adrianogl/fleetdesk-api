<?php

use App\Http\Controllers\Api\AuthAction;
use App\Http\Controllers\Api\LogoutAction;
use App\Http\Controllers\Api\Tasks\CreateAction;
use App\Http\Controllers\Api\Tasks\DeleteAction;
use App\Http\Controllers\Api\Tasks\ListAction;
use App\Http\Controllers\Api\Tasks\UpdateAction;
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

Route::get('/tasks', ListAction::class);
Route::post('/tasks', CreateAction::class);
Route::patch('/tasks/{task}', UpdateAction::class);
Route::delete('/tasks/{task}', DeleteAction::class);
