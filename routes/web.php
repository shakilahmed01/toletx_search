<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserinformationController;
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
//user post
Route::get('/verify/otp', [UserinformationController::class, 'verifyOtp'])->name('verify.otp');
Route::get('/post/bilboard', [App\Http\Controllers\UserWantedController::class, 'post_bilboard'])->name('post_bilboard');
Route::get('/wanted/list/billboard', [App\Http\Controllers\UserWantedController::class, 'list_billboard'])->name('wanted_list_billboard');
Route::get('/post/room', [App\Http\Controllers\UserWantedController::class, 'post_room'])->name('post_room');
Route::get('/wanted/list/room', [App\Http\Controllers\UserWantedController::class, 'list_room'])->name('wanted_list_room');
Route::get('/post/hotel', [App\Http\Controllers\UserWantedController::class, 'post_hotel'])->name('post_hotel');
Route::get('/wanted/list/hotel', [App\Http\Controllers\UserWantedController::class, 'list_hotel'])->name('wanted_list_hotel');
Route::get('/post/hostel', [App\Http\Controllers\UserWantedController::class, 'post_hostel'])->name('post_hostel');
Route::get('/wanted/list/hostel', [App\Http\Controllers\UserWantedController::class, 'list_hostel'])->name('wanted_list_hostel');
Route::get('/post/flat', [App\Http\Controllers\UserWantedController::class, 'post_flat'])->name('post_flat');
Route::get('/wanted/list/flat', [App\Http\Controllers\UserWantedController::class, 'list_flat'])->name('wanted_list_flat');
Route::get('/post/office', [App\Http\Controllers\UserWantedController::class, 'post_office'])->name('post_office');
Route::get('/wanted/list/office', [App\Http\Controllers\UserWantedController::class, 'list_office'])->name('wanted_list_office');
Route::get('/post/resort', [App\Http\Controllers\UserWantedController::class, 'post_resort'])->name('post_resort');
Route::get('/wanted/list/resort', [App\Http\Controllers\UserWantedController::class, 'list_resort'])->name('wanted_list_resort');
Route::get('/post/shop', [App\Http\Controllers\UserWantedController::class, 'post_shop'])->name('post_shop');
Route::get('/wanted/list/shop', [App\Http\Controllers\UserWantedController::class, 'list_shop'])->name('wanted_list_shop');
Route::get('/post/community', [App\Http\Controllers\UserWantedController::class, 'post_community'])->name('post_community');
Route::get('/wanted/list/community', [App\Http\Controllers\UserWantedController::class, 'list_community'])->name('wanted_list_community');
Route::get('/post/parking', [App\Http\Controllers\UserWantedController::class, 'post_parking_spot'])->name('post_parking_spot');
Route::get('/wanted/list/parking', [App\Http\Controllers\UserWantedController::class, 'list_parking_spot'])->name('wanted_list_parking_spot');
Route::get('/post/shop', [App\Http\Controllers\UserWantedController::class, 'post_shop'])->name('post_shop');
Route::get('/wanted/list/shop', [App\Http\Controllers\UserWantedController::class, 'list_shop'])->name('wanted_list_shop');
Route::get('/post/factory', [App\Http\Controllers\UserWantedController::class, 'post_factory'])->name('post_factory');
Route::get('/wanted/list/factory', [App\Http\Controllers\UserWantedController::class, 'list_factory'])->name('wanted_list_factory');
Route::get('/post/warehouse', [App\Http\Controllers\UserWantedController::class, 'post_warehouse'])->name('post_warehouse');
Route::get('/wanted/list/warehouse', [App\Http\Controllers\UserWantedController::class, 'list_warehouse'])->name('wanted_list_warehouse');
Route::get('/post/land', [App\Http\Controllers\UserWantedController::class, 'post_land'])->name('post_land');
Route::get('/wanted/list/land', [App\Http\Controllers\UserWantedController::class, 'list_land'])->name('wanted_list_land');
Route::get('/post/pond', [App\Http\Controllers\UserWantedController::class, 'post_pond'])->name('post_pond');
Route::get('/wanted/list/pond', [App\Http\Controllers\UserWantedController::class, 'list_pond'])->name('wanted_list_pond');
Route::get('/post/swimmingpool', [App\Http\Controllers\UserWantedController::class, 'post_swimmingpool'])->name('post_swimmingpool');
Route::get('/wanted/list/swimmingpool', [App\Http\Controllers\UserWantedController::class, 'list_swimmingpool'])->name('wanted_list_swimmingpool');
Route::get('/post/playground', [App\Http\Controllers\UserWantedController::class, 'post_playground'])->name('post_playground');
Route::get('/wanted/list/playground', [App\Http\Controllers\UserWantedController::class, 'list_playground'])->name('wanted_list_playground');
Route::get('/post/shooting', [App\Http\Controllers\UserWantedController::class, 'post_shooting'])->name('post_shooting');
Route::get('/wanted/list/shooting', [App\Http\Controllers\UserWantedController::class, 'list_shooting'])->name('wanted_list_shooting');
Route::get('/post/exhibution', [App\Http\Controllers\UserWantedController::class, 'post_exhibution'])->name('post_exhibution');
Route::get('/wanted/list/exhibution', [App\Http\Controllers\UserWantedController::class, 'list_exhibution'])->name('wanted_list_exhibution');
Route::get('/post/rooftop', [App\Http\Controllers\UserWantedController::class, 'post_rooftop'])->name('post_rooftop');
Route::get('/wanted/list/rooftop', [App\Http\Controllers\UserWantedController::class, 'list_rooftop'])->name('wanted_list_rooftop');

//end user post
Route::get('/firebase', [App\Http\Controllers\TestController::class, 'index1']);

//begin All Search
Route::get('/box', [App\Http\Controllers\TestController::class, 'index']);
Route::get('/search', [App\Http\Controllers\TestController::class, 'search'])->name('search');
//hotel search
Route::get('hotel/{id}',[App\Http\Controllers\TestController::class, 'hshow'] )->name('hotel.show');
Route::get('/hotel/details/{id}',[App\Http\Controllers\TestController::class, 'hotel_details'])->name('hotel_details');
Route::get('/hotel/custom/search',[App\Http\Controllers\CustomSearchController::class, 'hotel_search'])->name('hotel_search');
Route::get('/hotel/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'hotel_custom_details'])->name('hotel_custom_details');
//end hotel
//hostel search
Route::get('hostel/{id}',[App\Http\Controllers\TestController::class, 'hsshow'] )->name('hostel.show');
Route::get('/hostel/details/{id}',[App\Http\Controllers\TestController::class, 'hostel_details'])->name('hostel_details');
Route::get('/hostel/custom/search',[App\Http\Controllers\CustomSearchController::class, 'hostel_search'])->name('hostel_search');
Route::get('/hostel/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'hostel_custom_details'])->name('hostel_custom_details');
//end hostel
Route::get('bilboard/{id}',[App\Http\Controllers\TestController::class, 'bilboardshow'] )->name('bilboard.show');
Route::get('/bilboard/details/{id}',[App\Http\Controllers\TestController::class, 'bilboard_details'])->name('bilboard_details');
Route::get('/bilboard/custom/search',[App\Http\Controllers\CustomSearchController::class, 'bilboard_search'])->name('bilboard_search');
Route::get('/bilboard/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'bilboard_custom_details'])->name('bilboard_custom_details');
//community center search
Route::get('community/{id}',[App\Http\Controllers\TestController::class, 'cshow'] )->name('community.show');
Route::get('/community/details/{id}',[App\Http\Controllers\TestController::class, 'community_details'])->name('community_details');
Route::get('/community/custom/search',[App\Http\Controllers\CustomSearchController::class, 'community_search'])->name('community_search');
Route::get('/community/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'community_custom_details'])->name('community_custom_details');
//end community center
Route::get('exibution/{id}',[App\Http\Controllers\TestController::class, 'cshow'] )->name('exibution.show');
Route::get('factory/{id}',[App\Http\Controllers\TestController::class, 'cshow'] )->name('factory.show');
//flat search
Route::get('flat/{id}',[App\Http\Controllers\TestController::class, 'fshow'] )->name('flat.show');
Route::get('/flat/details/{id}',[App\Http\Controllers\TestController::class, 'flat_details'])->name('flat_details');
Route::get('/flat/custom/search',[App\Http\Controllers\CustomSearchController::class, 'flat_search'])->name('flat_search');
Route::get('/flat/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'flat_custom_details'])->name('flat_custom_details');
//end flat

//land search
Route::get('land/{id}',[App\Http\Controllers\TestController::class, 'lshow'] )->name('land.show');
Route::get('/land/details/{id}',[App\Http\Controllers\TestController::class, 'land_details'])->name('land_details');
Route::get('/land/custom/search',[App\Http\Controllers\CustomSearchController::class, 'land_search'])->name('land_search');
Route::get('/land/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'land_custom_details'])->name('land_custom_details');
//end land

//office search
Route::get('office/{id}',[App\Http\Controllers\TestController::class, 'oshow'] )->name('office.show');
Route::get('/office/details/{id}',[App\Http\Controllers\TestController::class, 'office_details'])->name('office_details');
Route::get('/office/custom/search',[App\Http\Controllers\CustomSearchController::class, 'office_search'])->name('office_search');
Route::get('/office/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'office_custom_details'])->name('office_custom_details');
//end office

//parking search
Route::get('parking/{id}',[App\Http\Controllers\TestController::class, 'pshow'] )->name('parking.show');
Route::get('/parking/details/{id}',[App\Http\Controllers\TestController::class, 'parking_details'])->name('parking_details');
Route::get('/parking/custom/search',[App\Http\Controllers\CustomSearchController::class, 'parking_spot_search'])->name('parking_spot_search');
Route::get('/parking/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'parking_spot_custom_details'])->name('parking_spot_custom_details');
//end parking search

//playground search
Route::get('playground/{id}',[App\Http\Controllers\TestController::class, 'plshow'] )->name('playground.show');
Route::get('/playground/details/{id}',[App\Http\Controllers\TestController::class, 'playground_details'])->name('playground_details');
Route::get('/playground/custom/search',[App\Http\Controllers\CustomSearchController::class, 'playground_search'])->name('playground_search');
Route::get('/playground/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'playground_custom_details'])->name('playground_custom_details');
//end playground

//restaurant search
Route::get('restaurant/{id}',[App\Http\Controllers\TestController::class, 'resortshow'] )->name('restaurant.show');
Route::get('/restaurant/details/{id}',[App\Http\Controllers\TestController::class, 'restaurant_details'])->name('restaurant_details');
Route::get('/restaurant/custom/search',[App\Http\Controllers\CustomSearchController::class, 'restaurant_search'])->name('restaurant_search');
Route::get('/restaurant/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'restaurant_custom_details'])->name('restaurant_custom_details');
//end restaurant

//rooftop search
Route::get('rooftop/{id}',[App\Http\Controllers\TestController::class, 'rooftopshow'] )->name('rooftop.show');
Route::get('/rooftop/details/{id}',[App\Http\Controllers\TestController::class, 'rooftop_details'])->name('rooftop_details');
Route::get('/rooftop/custom/search',[App\Http\Controllers\CustomSearchController::class, 'rooftop_search'])->name('rooftop_search');
Route::get('/rooftop/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'rooftop_custom_details'])->name('rooftop_custom_details');
//end rooftop

//room search
Route::get('room/{id}',[App\Http\Controllers\TestController::class, 'rshow'] )->name('room.show');
Route::get('/room/details/{id}',[App\Http\Controllers\TestController::class, 'room_details'])->name('room_details');
Route::get('/room/custom/search',[App\Http\Controllers\CustomSearchController::class, 'room_search'])->name('room_search');
Route::get('/room/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'room_custom_details'])->name('room_custom_details');
//end room

//shooting search
Route::get('shooting/{id}',[App\Http\Controllers\TestController::class, 'shootingshow'] )->name('shooting.show');
Route::get('/shooting/details/{id}',[App\Http\Controllers\TestController::class, 'shooting_details'])->name('shooting_details');
Route::get('/shootingspot/custom/search',[App\Http\Controllers\CustomSearchController::class, 'shootingspot_search'])->name('shootingspot_search');
Route::get('/shootingspot/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'shootingspot_custom_details'])->name('shootingspot_custom_details');
//end shooting
//shop search
Route::get('shop/{id}',[App\Http\Controllers\TestController::class, 'shopshow'] )->name('shop.show');
Route::get('/shop/details/{id}',[App\Http\Controllers\TestController::class, 'shop_details'])->name('shop_details');
Route::get('/shop/custom/search',[App\Http\Controllers\CustomSearchController::class, 'shop_search'])->name('shop_search');
Route::get('/shop/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'shop_custom_details'])->name('shop_custom_details');
//end shop

//swimmingpool search
Route::get('swimmingpool/{id}',[App\Http\Controllers\TestController::class, 'swimmingpoolshow'] )->name('swimmingpool.show');
Route::get('/swimmingpool/details/{id}',[App\Http\Controllers\TestController::class, 'swimmingpool_details'])->name('swimmingpool_details');
Route::get('/swimmingpool/custom/search',[App\Http\Controllers\CustomSearchController::class, 'swimmingpool_search'])->name('swimmingpool_search');
Route::get('/swimmingpool/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'swimmingpool_custom_details'])->name('swimmingpool_custom_details');
//end swimmingpool

//warehouse search
Route::get('warehouse/{id}',[App\Http\Controllers\TestController::class, 'warehouseshow'] )->name('warehouse.show');
Route::get('/warehouse/details/{id}',[App\Http\Controllers\TestController::class, 'warehouse_details'])->name('warehouse_details');
Route::get('/warehouse/custom/search',[App\Http\Controllers\CustomSearchController::class, 'warehouse_search'])->name('warehouse_search');
Route::get('/warehouse/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'warehouse_custom_details'])->name('warehouse_custom_details');
//end warehouse

//pond search
Route::get('pond/{id}',[App\Http\Controllers\TestController::class, 'pondshow'] )->name('pond.show');
Route::get('/pond/details/{id}',[App\Http\Controllers\TestController::class, 'pond_details'])->name('pond_details');
Route::get('/pond/custom/search',[App\Http\Controllers\CustomSearchController::class, 'pond_search'])->name('pond_search');
Route::get('/pond/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'pond_custom_details'])->name('pond_custom_details');
//end pond

//Exibution search
Route::get('exibution/{id}',[App\Http\Controllers\TestController::class, 'exibutionshow'] )->name('exibution.show');
Route::get('/exibution/details/{id}',[App\Http\Controllers\TestController::class, 'exibution_details'])->name('exibution_details');
Route::get('/exibution/custom/search',[App\Http\Controllers\CustomSearchController::class, 'exibution_search'])->name('exibution_search');
Route::get('/exibution/custom/search/details/{id}',[App\Http\Controllers\CustomSearchController::class, 'exibution_custom_details'])->name('exibution_custom_details');
//end Exibution

//end All Search


Auth::routes(["verify"=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'after_login_home'])->name('home');
Route::get('/index', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');

//begin userInformation
Route::post('post/user/information',[App\http\controllers\UserinformationController::class, 'post_user_information'])->name('post_user_information');
//end userInformation

//otp login
Route::post('login_new',  [App\http\controllers\UserinformationController::class,'login_new'])->name('newlogin');

Route::post('loginWithOtp', [App\http\controllers\UserinformationController::class,'loginWithOtp'])->name('loginWithOtp');
Route::get('loginWithOtp', [App\http\controllers\UserinformationController::class,'indexotp'])->name('loginotp');


Route::post('sendOtp', [App\http\controllers\UserinformationController::class, 'sendOtp'])->name('send.otp');
Route::post('newregister', [App\http\controllers\UserinformationController::class, 'register'])->name('newregister');
//end otp login


//Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [App\Http\Controllers\FaceBookController::class, 'loginUsingFacebook'])->name('fb_login');
    Route::get('callback', [App\Http\Controllers\FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

//end facebook login

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);



//begin admin Dashboard
Route::get('/admin/index', [App\Http\Controllers\DashboardController::class, 'admin_index'])->middleware('CheckROle','password.confirm')->name('admin_index');
Route::get('/custom/login', [App\Http\Controllers\DashboardController::class, 'custom_login'])->name('custom_login');
Route::get('/custom/register', [App\Http\Controllers\DashboardController::class, 'custom_register'])->name('custom_register');
//begin hotel
Route::get('/add/hotel', [App\Http\Controllers\DashboardController::class, 'add_hotel'])->name('add_hotel');
Route::post('/post/hotel', [App\Http\Controllers\DashboardController::class, 'post_hotel_information'])->name('post_hotel_information');
Route::get('/list/hotel', [App\Http\Controllers\DashboardController::class, 'list_hotel'])->middleware('CheckROle')->name('list_hotel');
Route::get('/hotel/edit/{id}',[App\Http\Controllers\DashboardController::class, 'hotel_edit'])->name('hotel_edit');
Route::post('/hotel/update',[App\Http\Controllers\DashboardController::class, 'hotel_update'])->name('hotel_update');
Route::get('/hotel/delete/{id}',[App\Http\Controllers\DashboardController::class, 'hotel_delete'])->name('hotel_delete');
Route::get('/hotel/restore/{id}',[App\Http\Controllers\DashboardController::class, 'hotel_restore'])->name('hotel_restore');

//end hotel

//begin room
Route::get('/add/room', [App\Http\Controllers\DashboardController::class, 'add_room'])->name('add_room');
Route::get('/list/room', [App\Http\Controllers\DashboardController::class, 'list_room'])->middleware('CheckROle')->name('list_room');
Route::post('/post/room', [App\Http\Controllers\DashboardController::class, 'post_room_information'])->name('post_room_information');
Route::get('/room/edit/{id}',[App\Http\Controllers\DashboardController::class, 'room_edit'])->name('room_edit');
Route::post('/room/update',[App\Http\Controllers\DashboardController::class, 'room_update'])->name('room_update');
Route::get('/room/delete/{id}',[App\Http\Controllers\DashboardController::class, 'room_delete'])->name('room_delete');
Route::get('/room/restore/{id}',[App\Http\Controllers\DashboardController::class, 'room_restore'])->name('room_restore');

//end room


//begin flat
Route::get('/add/flat', [App\Http\Controllers\DashboardController::class, 'add_flat'])->name('add_flat');
Route::get('/list/flat', [App\Http\Controllers\DashboardController::class, 'list_flat'])->middleware('CheckROle')->name('list_flat');
Route::post('/post/flat', [App\Http\Controllers\DashboardController::class, 'post_flat_information'])->name('post_flat_information');
Route::get('/flat/edit/{id}',[App\Http\Controllers\DashboardController::class, 'flat_edit'])->name('flat_edit');
Route::post('/flat/update',[App\Http\Controllers\DashboardController::class, 'flat_update'])->name('flat_update');
Route::get('/flat/delete/{id}',[App\Http\Controllers\DashboardController::class, 'flat_delete'])->name('flat_delete');
Route::get('/flat/restore/{id}',[App\Http\Controllers\DashboardController::class, 'flat_restore'])->name('flat_restore');
//end flat


//begin parking spot
Route::get('/add/parking', [App\Http\Controllers\DashboardController::class, 'add_parking_spot'])->name('add_parking_spot');
Route::get('/list/parking', [App\Http\Controllers\DashboardController::class, 'list_parking_spot'])->middleware('CheckROle')->name('list_parking_spot');
Route::post('/post/parking', [App\Http\Controllers\DashboardController::class, 'post_parking_spot_information'])->name('post_parking_spot_information');
Route::get('/parking/edit/{id}',[App\Http\Controllers\DashboardController::class, 'parking_spot_edit'])->name('parking_spot_edit');
Route::post('/parking/update',[App\Http\Controllers\DashboardController::class, 'parking_spot_update'])->name('parking_spot_update');
Route::get('/parking/delete/{id}',[App\Http\Controllers\DashboardController::class, 'parking_spot_delete'])->name('parking_spot_delete');
Route::get('/parking/restore/{id}',[App\Http\Controllers\DashboardController::class, 'parking_spot_restore'])->name('parking_spot_restore');
//end parking spot

//begin hostel
Route::get('/list/hostel', [App\Http\Controllers\DashboardController::class,'list_hostel'])->middleware('CheckROle')->name('list_hostel');
Route::get('/add/hostel', [App\Http\Controllers\DashboardController::class, 'add_hostel'])->name('add_hostel');
Route::post('/post/hostel', [App\Http\Controllers\DashboardController::class, 'post_hostel_information'])->name('post_hostel_information');
Route::get('/hostel/edit/{id}',[App\Http\Controllers\DashboardController::class, 'hostel_edit'])->name('hostel_edit');
Route::get('/hostel/delete/{id}',[App\Http\Controllers\DashboardController::class, 'hostel_delete'])->name('hostel_delete');
Route::get('/hostel/restore/{id}',[App\Http\Controllers\DashboardController::class, 'hostel_restore'])->name('hostel_restore');
Route::post('/hostel/update',[App\Http\Controllers\DashboardController::class, 'hostel_update'])->name('hostel_update');

//end hostel

//begin office
Route::get('/add/office', [App\Http\Controllers\DashboardController::class, 'add_office'])->name('add_office');
Route::get('/list/office', [App\Http\Controllers\DashboardController::class, 'list_office'])->middleware('CheckROle')->name('list_office');
Route::post('/post/office', [App\Http\Controllers\DashboardController::class, 'post_office_information'])->name('post_office_information');
Route::get('/office/edit/{id}',[App\Http\Controllers\DashboardController::class, 'office_edit'])->name('office_edit');
Route::post('/office/update',[App\Http\Controllers\DashboardController::class, 'office_update'])->name('office_update');
Route::get('/office/delete/{id}',[App\Http\Controllers\DashboardController::class, 'office_delete'])->name('office_delete');
Route::get('/office/restore/{id}',[App\Http\Controllers\DashboardController::class, 'office_restore'])->name('office_restore');
//end office

//begin Land
Route::get('/add/land', [App\Http\Controllers\DashboardController::class, 'add_land'])->name('add_land');
Route::get('/list/land', [App\Http\Controllers\DashboardController::class, 'list_land'])->middleware('CheckROle')->name('list_land');
Route::post('/post/land', [App\Http\Controllers\DashboardController::class, 'post_land_information'])->name('post_land_information');
Route::get('/land/edit/{id}',[App\Http\Controllers\DashboardController::class, 'land_edit'])->name('land_edit');
Route::post('/land/update',[App\Http\Controllers\DashboardController::class, 'land_update'])->name('land_update');
Route::get('/land/delete/{id}',[App\Http\Controllers\DashboardController::class, 'land_delete'])->name('land_delete');
Route::get('/land/restore/{id}',[App\Http\Controllers\DashboardController::class, 'land_restore'])->name('land_restore');
//end Land

//begin community center
Route::get('/add/community', [App\Http\Controllers\DashboardController::class, 'add_community'])->name('add_community');
Route::get('/list/community', [App\Http\Controllers\DashboardController::class, 'list_community'])->middleware('CheckROle')->name('list_community');
Route::post('/post/community', [App\Http\Controllers\DashboardController::class, 'post_community_information'])->name('post_community_information');
Route::get('/community/edit/{id}',[App\Http\Controllers\DashboardController::class, 'community_edit'])->name('community_edit');
Route::post('/community/update',[App\Http\Controllers\DashboardController::class, 'community_update'])->name('community_update');
Route::get('/community/delete/{id}',[App\Http\Controllers\DashboardController::class, 'community_delete'])->name('community_delete');
Route::get('/community/restore/{id}',[App\Http\Controllers\DashboardController::class, 'community_restore'])->name('community_restore');
//end community center

//begin shooting spot
Route::get('/add/shooting', [App\Http\Controllers\DashboardController::class, 'add_shooting'])->name('add_shooting');
Route::get('/list/shooting', [App\Http\Controllers\DashboardController::class, 'list_shooting'])->middleware('CheckROle')->name('list_shooting');
Route::post('/post/shooting', [App\Http\Controllers\DashboardController::class, 'post_shooting_information'])->name('post_shooting_information');
Route::get('/shooting/edit/{id}',[App\Http\Controllers\DashboardController::class, 'shooting_edit'])->name('shooting_edit');
Route::post('/shooting/update',[App\Http\Controllers\DashboardController::class, 'shooting_update'])->name('shooting_update');
Route::get('/shooting/delete/{id}',[App\Http\Controllers\DashboardController::class, 'shooting_delete'])->name('shooting_delete');
Route::get('/shooting/restore/{id}',[App\Http\Controllers\DashboardController::class, 'shooting_restore'])->name('shooting_restore');
//end shooting spot

//begin shop
Route::get('/add/shop', [App\Http\Controllers\DashboardController::class, 'add_shop'])->name('add_shop');
Route::get('/list/shop', [App\Http\Controllers\DashboardController::class, 'list_shop'])->middleware('CheckROle')->name('list_shop');
Route::post('/post/shop', [App\Http\Controllers\DashboardController::class, 'post_shop_information'])->name('post_shop_information');
Route::get('/shop/edit/{id}',[App\Http\Controllers\DashboardController::class, 'shop_edit'])->name('shop_edit');
Route::post('/shop/update',[App\Http\Controllers\DashboardController::class, 'shop_update'])->name('shop_update');
Route::get('/shop/delete/{id}',[App\Http\Controllers\DashboardController::class, 'shop_delete'])->name('shop_delete');
Route::get('/shop/restore/{id}',[App\Http\Controllers\DashboardController::class, 'shop_restore'])->name('shop_restore');
//end shop

//begin factory
Route::get('/add/factory', [App\Http\Controllers\DashboardController::class, 'add_factory'])->name('add_factory');
Route::get('/list/factory', [App\Http\Controllers\DashboardController::class, 'list_factory'])->middleware('CheckROle')->name('list_factory');
Route::post('/post/factory', [App\Http\Controllers\DashboardController::class, 'post_factory_information'])->name('post_factory_information');
Route::get('/factory/edit/{id}',[App\Http\Controllers\DashboardController::class, 'factory_edit'])->name('factory_edit');
Route::post('/factory/update',[App\Http\Controllers\DashboardController::class, 'factory_update'])->name('factory_update');
Route::get('/factory/delete/{id}',[App\Http\Controllers\DashboardController::class, 'factory_delete'])->name('factory_delete');
Route::get('/factory/restore/{id}',[App\Http\Controllers\DashboardController::class, 'factory_restore'])->name('factory_restore');
//end factory

//begin warehouse
Route::get('/add/warehouse', [App\Http\Controllers\DashboardController::class, 'add_warehouse'])->name('add_warehouse');
Route::get('/list/warehouse', [App\Http\Controllers\DashboardController::class, 'list_warehouse'])->middleware('CheckROle')->name('list_warehouse');
Route::post('/post/warehouse', [App\Http\Controllers\DashboardController::class, 'post_warehouse_information'])->name('post_warehouse_information');
Route::get('/warehouse/edit/{id}',[App\Http\Controllers\DashboardController::class, 'warehouse_edit'])->name('warehouse_edit');
Route::post('/warehouse/update',[App\Http\Controllers\DashboardController::class, 'warehouse_update'])->name('warehouse_update');
Route::get('/warehouse/delete/{id}',[App\Http\Controllers\DashboardController::class, 'warehouse_delete'])->name('warehouse_delete');
Route::get('/warehouse/restore/{id}',[App\Http\Controllers\DashboardController::class, 'warehouse_restore'])->name('warehouse_restore');
//end warehouse

//begin pond
Route::get('/add/pond', [App\Http\Controllers\DashboardController::class, 'add_pond'])->name('add_pond');
Route::get('/list/pond', [App\Http\Controllers\DashboardController::class, 'list_pond'])->middleware('CheckROle')->name('list_pond');
Route::post('/post/pond', [App\Http\Controllers\DashboardController::class, 'post_pond_information'])->name('post_pond_information');
Route::get('/pond/edit/{id}',[App\Http\Controllers\DashboardController::class, 'pond_edit'])->name('pond_edit');
Route::post('/pond/update',[App\Http\Controllers\DashboardController::class, 'pond_update'])->name('pond_update');
Route::get('/pond/delete/{id}',[App\Http\Controllers\DashboardController::class, 'pond_delete'])->name('pond_delete');
Route::get('/pond/restore/{id}',[App\Http\Controllers\DashboardController::class, 'pond_restore'])->name('pond_restore');
//end pond

//begin swimmingpool
Route::get('/add/swimmingpool', [App\Http\Controllers\DashboardController::class, 'add_swimmingpool'])->name('add_swimmingpool');
Route::get('/list/swimmingpool', [App\Http\Controllers\DashboardController::class, 'list_swimmingpool'])->middleware('CheckROle')->name('list_swimmingpool');
Route::post('/post/swimmingpool', [App\Http\Controllers\DashboardController::class, 'post_swimmingpool_information'])->name('post_swimmingpool_information');
Route::get('/swimmingpool/edit/{id}',[App\Http\Controllers\DashboardController::class, 'swimmingpool_edit'])->name('swimmingpool_edit');
Route::post('/swimmingpool/update',[App\Http\Controllers\DashboardController::class, 'swimmingpool_update'])->name('swimmingpool_update');
Route::get('/swimmingpool/delete/{id}',[App\Http\Controllers\DashboardController::class, 'swimmingpool_delete'])->name('swimmingpool_delete');
Route::get('/swimmingpool/restore/{id}',[App\Http\Controllers\DashboardController::class, 'swimmingpool_restore'])->name('swimmingpool_restore');
//end swimmingpool

//begin Bilboard
Route::get('/add/bilboard', [App\Http\Controllers\DashboardController::class, 'add_bilboard'])->name('add_bilboard');
Route::get('/list/bilboard', [App\Http\Controllers\DashboardController::class, 'list_bilboard'])->middleware('CheckROle')->name('list_bilboard');
Route::post('/post/bilboard', [App\Http\Controllers\DashboardController::class, 'post_bilboard_information'])->name('post_bilboard_information');
Route::get('/bilboard/edit/{id}',[App\Http\Controllers\DashboardController::class, 'bilboard_edit'])->name('bilboard_edit');
Route::post('/bilboard/update',[App\Http\Controllers\DashboardController::class, 'bilboard_update'])->name('bilboard_update');
Route::get('/bilboard/delete/{id}',[App\Http\Controllers\DashboardController::class, 'bilboard_delete'])->name('bilboard_delete');
Route::get('/bilboard/restore/{id}',[App\Http\Controllers\DashboardController::class, 'bilboard_restore'])->name('bilboard_restore');
//end bilboard

//begin rooftop
Route::get('/add/rooftop', [App\Http\Controllers\DashboardController::class, 'add_rooftop'])->name('add_rooftop');
Route::get('/list/rooftop', [App\Http\Controllers\DashboardController::class, 'list_rooftop'])->middleware('CheckROle')->name('list_rooftop');
Route::post('/post/rooftop', [App\Http\Controllers\DashboardController::class, 'post_rooftop_information'])->name('post_rooftop_information');
Route::get('/rooftop/edit/{id}',[App\Http\Controllers\DashboardController::class, 'rooftop_edit'])->name('rooftop_edit');
Route::post('/rooftop/update',[App\Http\Controllers\DashboardController::class, 'rooftop_update'])->name('rooftop_update');
Route::get('/rooftop/delete/{id}',[App\Http\Controllers\DashboardController::class, 'rooftop_delete'])->name('rooftop_delete');
Route::get('/rooftop/restore/{id}',[App\Http\Controllers\DashboardController::class, 'rooftop_restore'])->name('rooftop_restore');
//end rooftop

//begin restuarant
Route::get('/add/restuarant', [App\Http\Controllers\DashboardController::class, 'add_restuarant'])->name('add_restuarant');
Route::get('/list/restuarant', [App\Http\Controllers\DashboardController::class, 'list_restuarant'])->middleware('CheckROle')->name('list_restuarant');
Route::post('/post/restuarant', [App\Http\Controllers\DashboardController::class, 'post_restuarant_information'])->name('post_restuarant_information');
Route::get('/restuarant/edit/{id}',[App\Http\Controllers\DashboardController::class, 'restuarant_edit'])->name('restuarant_edit');
Route::post('/restuarant/update',[App\Http\Controllers\DashboardController::class, 'restuarant_update'])->name('restuarant_update');
Route::get('/restuarant/delete/{id}',[App\Http\Controllers\DashboardController::class, 'restuarant_delete'])->name('restuarant_delete');
Route::get('/restuarant/restore/{id}',[App\Http\Controllers\DashboardController::class, 'restuarant_restore'])->name('restuarant_restore');
//end restuarant

//begin gallery
Route::get('/add/gallery', [App\Http\Controllers\DashboardController::class, 'add_gallery'])->name('add_gallery');
Route::get('/list/gallery', [App\Http\Controllers\DashboardController::class, 'list_gallery'])->middleware('CheckROle')->name('list_gallery');
Route::post('/post/gallery', [App\Http\Controllers\DashboardController::class, 'post_gallery_information'])->name('post_gallery_information');
Route::get('/gallery/edit/{id}',[App\Http\Controllers\DashboardController::class, 'gallery_edit'])->name('gallery_edit');
Route::post('/gallery/update',[App\Http\Controllers\DashboardController::class, 'gallery_update'])->name('gallery_update');
Route::get('/gallery/delete/{id}',[App\Http\Controllers\DashboardController::class, 'gallery_delete'])->name('gallery_delete');
Route::get('/gallery/restore/{id}',[App\Http\Controllers\DashboardController::class, 'gallery_restore'])->name('gallery_restore');
//end gallery

//begin playground
Route::get('/add/playground', [App\Http\Controllers\DashboardController::class, 'add_playground'])->name('add_playground');
Route::get('/list/playground', [App\Http\Controllers\DashboardController::class, 'list_playground'])->middleware('CheckROle')->name('list_playground');
Route::post('/post/playground', [App\Http\Controllers\DashboardController::class, 'post_playground_information'])->name('post_playground_information');
Route::get('/playground/edit/{id}',[App\Http\Controllers\DashboardController::class, 'playground_edit'])->name('playground_edit');
Route::post('/playground/update',[App\Http\Controllers\DashboardController::class, 'playground_update'])->name('playground_update');
Route::get('/playground/delete/{id}',[App\Http\Controllers\DashboardController::class, 'playground_delete'])->name('playground_delete');
Route::get('/playground/restore/{id}',[App\Http\Controllers\DashboardController::class, 'playground_restore'])->name('playground_restore');
//end playground

//begin exibutioncenter
Route::get('/add/exibution_center', [App\Http\Controllers\DashboardController::class, 'add_exibution_center'])->name('add_exibution_center');
Route::get('/list/exibution_center', [App\Http\Controllers\DashboardController::class, 'list_exibution_center'])->middleware('CheckROle')->name('list_exibution_center');
Route::post('/post/exibution_center', [App\Http\Controllers\DashboardController::class, 'post_exibution_center_information'])->name('post_exibution_center_information');
Route::get('/exibutioncenter/edit/{id}',[App\Http\Controllers\DashboardController::class, 'exibution_center_edit'])->name('exibution_center_edit');
Route::post('/exibutioncenter/update',[App\Http\Controllers\DashboardController::class, 'exibution_center_update'])->name('exibution_center_update');
Route::get('/exibutioncenter/delete/{id}',[App\Http\Controllers\DashboardController::class, 'exibution_center_delete'])->name('exibution_center_delete');
Route::get('/exibutioncenter/restore/{id}',[App\Http\Controllers\DashboardController::class, 'exibution_center_restore'])->name('exibution_center_restore');
//end exibutioncenter



//begin Frontend
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/index',[App\Http\Controllers\FrontendController::class, 'index'])->name('index');
Route::get('/registration',[App\Http\Controllers\frontendController::class, 'registration'])->name('registration');

Route::get('/single_header_added',[App\Http\Controllers\frontendController::class, 'single_header_added'])->name('single_header_added');
Route::get('/header',[App\Http\Controllers\frontendController::class, 'header'])->name('header');
Route::get('/footer',[App\Http\Controllers\frontendController::class, 'footer'])->name('footer');
Route::get('/faq',[App\Http\Controllers\frontendController::class, 'faq'])->name('faq');
Route::get('/report_contact_us',[App\Http\Controllers\frontendController::class, 'report_contact_us'])->name('report_contact_us');
Route::get('/advertise',[App\Http\Controllers\frontendController::class, 'advertise'])->name('advertise');
Route::get('/after_login_home',[App\Http\Controllers\frontendController::class, 'after_login_home'])->name('after_login_home');
Route::get('/single_pg',[App\Http\Controllers\frontendController::class, 'single_pg'])->Middleware('auth')->name('single_pg');

Route::get('/profile',[App\Http\Controllers\frontendController::class, 'profile'])->name('profile');
Route::get('/profile_info',[App\Http\Controllers\frontendController::class, 'profile_info'])->name('profile_info');
Route::get('/room',[App\Http\Controllers\frontendController::class, 'room'])->name('room');
Route::get('/flat',[App\Http\Controllers\frontendController::class, 'flat'])->name('flat');
Route::get('/building',[App\Http\Controllers\frontendController::class, 'building'])->name('building');
Route::get('/parking',[App\Http\Controllers\frontendController::class, 'parking'])->name('parking');
Route::get('/hotel',[App\Http\Controllers\frontendController::class, 'hotel'])->name('hotel');
Route::get('/hostel',[App\Http\Controllers\frontendController::class, 'hostel'])->name('hostel');
Route::get('/resort',[App\Http\Controllers\frontendController::class, 'resort'])->name('resort');
Route::get('/office',[App\Http\Controllers\frontendController::class, 'office'])->name('office');
Route::get('/shop',[App\Http\Controllers\frontendController::class, 'shop'])->name('shop');
Route::get('/community_hall',[App\Http\Controllers\frontendController::class, 'community_hall'])->name('community_hall');
Route::get('/factory',[App\Http\Controllers\frontendController::class, 'factory'])->name('factory');
Route::get('/warehouse',[App\Http\Controllers\frontendController::class, 'warehouse'])->name('warehouse');
Route::get('/land',[App\Http\Controllers\frontendController::class, 'land'])->name('land');
Route::get('/pond',[App\Http\Controllers\frontendController::class, 'pond'])->name('pond');
Route::get('/swimming_pool',[App\Http\Controllers\frontendController::class, 'swimming_pool'])->name('swimming_pool');
Route::get('/playground',[App\Http\Controllers\frontendController::class, 'playground'])->name('playground');
Route::get('/shooting_spot',[App\Http\Controllers\frontendController::class, 'shooting_spot'])->name('shooting_spot');
Route::get('/exhibition_center',[App\Http\Controllers\frontendController::class, 'exhibition_center'])->name('exhibition_center');
Route::get('/rooftop',[App\Http\Controllers\frontendController::class, 'rooftop'])->name('rooftop');
Route::get('/bilboard',[App\Http\Controllers\frontendController::class, 'bilboard'])->name('bilboard');
Route::get('/login_form',[App\Http\Controllers\frontendController::class, 'login_form'])->name('login_form');
Route::get('/slider_section',[App\Http\Controllers\frontendController::class, 'slider_section'])->name('slider_section');
Route::get('/service_item',[App\Http\Controllers\frontendController::class, 'service_item'])->name('service_item');
Route::get('/icon',[App\Http\Controllers\frontendController::class, 'icon'])->name('icon');


Route::get('/slider_section_slick',[App\Http\Controllers\frontendController::class, 'slider_section_slick'])->name('slider_section_slick');
//end Frontend
//end Admin
