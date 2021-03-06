<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PAPI\RegisterController;
use App\Http\Controllers\PAPI\ProductController;
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
//login_register api
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);
Route::post('sendotp', [RegisterController::class, 'sendOtp']);
Route::post('loginWithOtp', [RegisterController::class, 'loginWithOtp']);
//end login_register api

//service post api


//end service post api

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('products', ProductController::class);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});
//post api route
Route::post('room/post',[App\http\controllers\Api\ApiController::class, 'api_post_room'])->name('api_post_room');
Route::post('land/post',[App\http\controllers\Api\ApiController::class, 'api_post_land'])->name('api_post_land');
Route::post('community/post',[App\http\controllers\Api\ApiController::class, 'api_post_community'])->name('api_post_community');
Route::post('shooting/post',[App\http\controllers\Api\ApiController::class, 'api_post_shooting'])->name('api_post_shooting');
Route::post('shop/post',[App\http\controllers\Api\ApiController::class, 'api_post_shop'])->name('api_post_shop');
Route::post('factory/post',[App\http\controllers\Api\ApiController::class, 'api_post_factory'])->name('api_post_factory');
Route::post('warehouse/post',[App\http\controllers\Api\ApiController::class, 'api_post_warehouse'])->name('api_post_warehouse');
Route::post('pond/post',[App\http\controllers\Api\ApiController::class, 'api_post_pond'])->name('api_post_pond');
Route::post('swimmingpool/post',[App\http\controllers\Api\ApiController::class, 'api_post_swimmingpool'])->name('api_post_swimmingpool');
Route::post('bilboard/post',[App\http\controllers\Api\ApiController::class, 'api_post_bilboard'])->name('api_post_bilboard');
Route::post('rooftop/post',[App\http\controllers\Api\ApiController::class, 'api_post_rooftop'])->name('api_post_rooftop');
Route::post('resort/post',[App\http\controllers\Api\ApiController::class, 'api_post_resort'])->name('api_post_resort');
Route::post('exibution/post',[App\http\controllers\Api\ApiController::class, 'api_post_exibution'])->name('api_post_exibution');
Route::post('playground/post',[App\http\controllers\Api\ApiController::class, 'api_post_playground'])->name('api_post_playground');
Route::post('hotel/post',[App\http\controllers\Api\ApiController::class, 'api_post_hotel'])->name('api_post_hotel');
Route::post('flat/post',[App\http\controllers\Api\ApiController::class, 'api_post_flat'])->name('api_post_flat');
Route::post('parking/post',[App\http\controllers\Api\ApiController::class, 'api_post_parking'])->name('api_post_parking');
//hostel
Route::post('hostel/post',[App\http\controllers\Api\ApiController::class, 'api_post_hostel'])->name('api_post_hostel');
Route::get('/hostel/edit/{id}',[App\Http\Controllers\Api\ApiController::class, 'api_hostel_edit'])->name('hostel_edit');
Route::PATCH('/hostel/update',[App\Http\Controllers\Api\ApiController::class, 'hostel_update'])->name('hostel_update');
Route::DELETE('/hostel/delete/{id}',[App\Http\Controllers\Api\ApiController::class, 'hostel_delete'])->name('hostel_delete');
//end hostel
Route::post('office/post',[App\http\controllers\Api\ApiController::class, 'api_post_office'])->name('api_post_office');

//get api route
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
Route::get('/warehouse',[App\http\controllers\Api\ApiController::class, 'createapi_warehouse'])->name('createapi_warehouse');
Route::get('/exhibution',[App\http\controllers\Api\ApiController::class, 'createapi_exhibution'])->name('createapi_exhibution');
Route::get('/pond',[App\http\controllers\Api\ApiController::class, 'createapi_pond'])->name('createapi_pond');
Route::get('/rooftop',[App\http\controllers\Api\ApiController::class, 'createapi_rooftop'])->name('createapi_rooftop');
Route::get('/shooting',[App\http\controllers\Api\ApiController::class, 'createapi_shooting'])->name('createapi_shooting');
Route::get('/playground',[App\http\controllers\Api\ApiController::class, 'createapi_playground'])->name('createapi_playground');
Route::get('/swimmingpool',[App\http\controllers\Api\ApiController::class, 'createapi_swimmingpool'])->name('createapi_swimmingpool');
Route::get('/restaurant',[App\http\controllers\Api\ApiController::class, 'createapi_restaurant'])->name('createapi_restaurant');
Route::get('/shop',[App\http\controllers\Api\ApiController::class, 'createapi_shop'])->name('createapi_shop');
