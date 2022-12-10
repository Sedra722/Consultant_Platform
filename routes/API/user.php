<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::post('user/register'   ,   [AuthController::class ,'User_Register']);
Route::post('user/login'   ,      [AuthController::class ,'User_Login']);
Route::group( ['prefix' => 'user','middleware' => ['auth:user-api','scopes:user'] ], function(){
    Route::post('logout',[AuthController::class, 'User_Logout']);
});