<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SearchController;

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
Route::get('categories',[CategoryController::class, 'index']);
Route::get('categories/{id}/experts',[CategoryController::class, 'experts']);
Route::get('search',[SearchController::class, 'search']);


Route::group( ['prefix' => 'user','middleware' => ['auth:user-api','scopes:user'] ], function(){
    Route::post('logout',[AuthController::class, 'User_Logout']);
});