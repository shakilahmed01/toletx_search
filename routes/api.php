<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->post('room/post',[App\http\controllers\Api\ApiController::class, 'api_post_room'])->name('api_post_room');
Route::middleware('auth:sanctum')->post('land/post',[App\http\controllers\Api\ApiController::class, 'api_post_land'])->name('api_post_land');
Route::get('/user',[App\http\controllers\Api\ApiController::class, 'createapi_user_registration'])->name('createapi_user_registration');
Route::get('/room',[App\http\controllers\Api\ApiController::class, 'createapi_room'])->name('createapi_room');
Route::get('/hotel',[App\http\controllers\Api\ApiController::class, 'createapi_hotel'])->name('createapi_hotel');
Route::get('/hostel',[App\http\controllers\Api\ApiController::class, 'createapi_hostel'])->name('createapi_hostel');
Route::get('/bilboard',[App\http\controllers\Api\ApiController::class, 'createapi_bilboard'])->name('createapi_bilboard');
Route::get('/community',[App\http\controllers\Api\ApiController::class, 'createapi_community'])->name('createapi_community');
Route::get('/flat',[App\http\controllers\Api\ApiController::class, 'createapi_flat'])->name('createapi_flat');
Route::get('/parking',[App\http\controllers\Api\ApiController::class, 'createapi_parking'])->name('createapi_parking');
Route::get('/factory',[App\http\controllers\Api\ApiController::class, 'createapi_factory'])->name('createapi_factory');
Route::get('/shop',[App\http\controllers\Api\ApiController::class, 'createapi_shop'])->name('createapi_shop');
