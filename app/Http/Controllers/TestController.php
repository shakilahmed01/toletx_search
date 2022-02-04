<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Hostel;
use App\Models\Office;
use App\Models\Land;
use App\Models\Community_Center;
use App\Models\Shooting_Spot;
use App\Models\Shop;
use App\Models\Factory;
use App\Models\Warehouse;
use App\Models\Pond;
use App\Models\Swimming_Pool;
use App\Models\Bilboard;
use App\Models\Rooftop;
use App\Models\Restaurant;
use App\Models\Exibution_Center;
use App\Models\Play_ground;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;

class TestController extends Controller
{
    public function index()
    {
      return view('welcome');
    }

    public function search(Request $request)
    {
       $searchResults = (new Search())
            ->registerModel(Hostel::class,
            'address',
            'hostel_name',
            'wifi',
            'hot_water',
            'lift',
            'parking',
            'furnished',
            'ac',
            'utilities',
            'laundry',
            'attached_varanda',
            'attached_toilet',
            'cable_tv',)
            ->registerModel(Hotel::class,
            'hotel_name',
            'location',
            'wifi',
            'bathroom',
            'cctv',
            'lift',
            'furnished',
            'security',
            'parking',
            'price',
            'guest_count',)
            ->registerModel(Bilboard::class,
            'address',
            'type',
            'size',
            'hieght',
            'electricity',
            'price',)
            ->registerModel(Community_Center::class,
            'community_name',
            'address',
            'floor_level',
            'floor_size',
            'road_width',
            'utilities',
            'interior_condition',
            'fire_safety',
            'lift',
            'wifi',
            'garden',
            'cooking',
            'sitting',
            'parking',
            'price',)
            ->registerModel(Exibution_Center::class,
            'exibution_center_name',
            'address',
            'room_type',
            'room_size',
            'utilities',
            'attached_toilet',
            'attached_varanda',
            'hot_water',
            'laundry',
            'ac',
            'cable_tv',
            'wifi',
            'lift',
            'furnished',
            'parking',
            'dining',
            'spa',
            'gym',
            'sports',
            'swimmingpool',
            'price',)
            ->registerModel(Factory::class,
            'factory_name',
            'address',
            'floor_level',
            'floor_size',
            'road_width',
            'utilities',
            'building_condition',
            'fire_safety',
            'lift',
            'interior_condition',
            'drainage_system',
            'parking',
            'price',)
            ->registerModel(Flat::class,
            'address',
            'flat_size',
            'description',
            'utilities',
            'attached_toilet',
            'attached_varanda',
            'hot_water',
            'laundry',
            'ac',
            'cable_tv',
            'wifi',
            'lift',
            'furnished',
            'parking',
            'price',)
            ->registerModel(Land::class,
            'address',
            'land_area',
            'vegetations',
            'road_width',
            'price',)
            ->registerModel(Office::class,
            'address',
            'floor_level',
            'floor_size',
            'road_width',
            'utilities',
            'interior_condition',
            'fire_safety',
            'lift',
            'emergency_lift',
            'parking',
            'price',)
            ->registerModel(Parking_Spot::class,
            'address',
            'price',
            'floor_level',
            'floor_height',
            'vehicle_type',
            'description',)
            ->registerModel(Play_ground::class,
            'address',
            'type',
            'utilities',
            'attached_toilet',
            'laundry',
            'change_room',
            'wifi',
            'furnished',
            'ac',
            'parking',
            'dining',
            'spa',
            'gym',
            'sports',
            'swimmingpool',
            'price',)
            ->registerModel(Pond::class,
            'address',
            'purpose',
            'water_level',
            'pond_area',
            'purpose',
            'road_width',
            'drainage_system',
            'price',)
            ->registerModel(Restaurant::class,
            'resort_name',
            'address',
            'room_type',
            'room_size',
            'utilities',
            'attached_toilet',
            'attached_varanda',
            'hot_water',
            'laundry',
            'ac',
            'cable_tv',
            'wifi',
            'lift',
            'furnished',
            'parking',
            'dining',
            'spa',
            'gym',
            'sports',
            'swimmingpool',
            'price',)
            ->registerModel(Rooftop::class,
            'address',
            'floor_area',
            'utilities',
            'protection',
            'lift',
            'interior_condition',
            'shed',
            'parking',
            'price',)
            ->registerModel(Room::class,
            'hotel_name',
            'address',
            'room_size',
            'attached_toilet',
            'utilities',
            'attached_varanda',
            'hot_water',
            'laundry',
            'ac',
            'cable_tv',
            'wifi',
            'lift',
            'furnished',
            'parking',
            'price',)
            ->registerModel(Shooting_Spot::class,
            'shooting_name',
            'address',
            'floor_level',
            'floor_size',
            'road_width',
            'utilities',
            'building_condition',
            'fire_safety',
            'lift',
            'wifi',
            'garden',
            'cooking',
            'sitting',
            'parking',
            'vegetations',
            'price',)
            ->registerModel(Shop::class,
            'address',
            'floor_level',
            'floor_size',
            'road_width',
            'utilities',
            'building_condition',
            'fire_safety',
            'lift',
            'interior_condition',
            'parking',
            'price',)
            ->registerModel(Swimming_Pool::class,
            'type',
            'address',
            'size',
            'toilet',
            'wifi',
            'laundry',
            'change_room',
            'parking',
            'laundry',
            'price',)
            ->registerModel(Warehouse::class,
            'address',
            'type',
            'floor_level',
            'floor_size',
            'road_width',
            'utilities',
            'building_condition',
            'fire_safety',
            'lift',
            'interior_condition',
            'drainage_system',
            'parking',
            'price',)
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }


    function rshow(){
      $rooms=Room::all();
      return view('Dashboard.search.room',compact('rooms'));
    }
    function room_details($id){
      $list=Room::findOrFail($id);
      return view('Dashboard.search.single_room_list',compact('list'));
    }
//end room
    function hshow(){
      $hotels=Hotel::all();
      return view('Dashboard.search.hotel',compact('hotels'));
    }
    function hotel_details($id){
      $list=Hotel::findOrFail($id);
      return view('Dashboard.search.single_hotel_list',compact('list'));
    }
//end hotel
    function fshow(){
      $flats=Flat::all();
      return view('Dashboard.search.flat',compact('flats'));
    }
    function flat_details($id){
      $list=Flat::findOrFail($id);
      return view('Dashboard.search.single_flat_list',compact('list'));
    }
//end flat
    function pshow(){
      $parkings=Parking_Spot::all();
      return view('Dashboard.search.parking',compact('parkings'));
    }
    function parking_details($id){
      $list=Parking_Spot::findOrFail($id);
      return view('Dashboard.search.single_parking_list',compact('list'));
    }
//end parking spot
    function oshow(){
      $offices=Office::all();
      return view('Dashboard.search.office',compact('offices'));
    }
    function office_details($id){
      $list=Office::findOrFail($id);
      return view('Dashboard.search.single_office_list',compact('list'));
    }
//end office
    function cshow(){
      $communities=Community_Center::all();
      return view('Dashboard.search.community',compact('communities'));
    }
    function community_details($id){
      $list=Community_Center::findOrFail($id);
      return view('Dashboard.search.single_community_list',compact('list'));
    }
//end community
    function hsshow(){
      $hostels=Hostel::all();
      return view('Dashboard.search.hostel',compact('hostels'));
    }

    function hostel_details($id){
      $list=Hostel::findOrFail($id);
      return view('Dashboard.search.single_hostel_list',compact('list'));
    }
//end hostel
    function lshow(){
      $lands=Land::all();
      return view('Dashboard.search.land',compact('lands'));
    }
    function land_details($id){
      $list=Land::findOrFail($id);
      return view('Dashboard.search.single_land_list',compact('list'));
    }
//end land
    function plshow(){
      $playgrounds=Play_ground::all();
      return view('Dashboard.search.playground',compact('playgrounds'));
    }
    function playground_details($id){
      $list=Play_ground::findOrFail($id);
      return view('Dashboard.search.single_playground_list',compact('list'));
    }
//end land
    function resortshow(){
      $restaurants=Restaurant::all();
      return view('Dashboard.search.restaurant',compact('restaurants'));
    }
    function restaurant_details($id){
      $list=Restaurant::findOrFail($id);
      return view('Dashboard.search.single_restaurant_list',compact('list'));
    }
//end restaurant
    function rooftopshow(){
      $rooftops=Rooftop::all();
      return view('Dashboard.search.rooftop',compact('rooftops'));
    }
    function rooftop_details($id){
      $list=Rooftop::findOrFail($id);
      return view('Dashboard.search.single_rooftop_list',compact('list'));
    }
//end rooftop
    function shootingshow(){
      $shootings=Shooting_Spot::all();
      return view('Dashboard.search.shooting',compact('shootings'));
    }
    function shooting_details($id){
      $list=Shooting_Spot::findOrFail($id);
      return view('Dashboard.search.single_shooting_list',compact('list'));
    }
//end shooting spot
    function shopshow(){
      $shops=Shop::all();
      return view('Dashboard.search.shop',compact('shops'));
    }
    function shop_details($id){
      $list=Shop::findOrFail($id);
      return view('Dashboard.search.single_shop_list',compact('list'));
    }
//end shooting spot
    function swimmingpoolshow(){
      $swimmingpools=Swimming_Pool::all();
      return view('Dashboard.search.swimmingpool',compact('swimmingpools'));
    }
    function swimmingpool_details($id){
      $list=Swimming_Pool::findOrFail($id);
      return view('Dashboard.search.single_swimmingpool_list',compact('list'));
    }
//end swimmingpool
    function warehouseshow(){
      $warehouses=Warehouse::all();
      return view('Dashboard.search.warehouse',compact('warehouses'));
    }
    function warehouse_details($id){
      $list=Warehouse::findOrFail($id);
      return view('Dashboard.search.single_warehouse_list',compact('list'));
    }
//end warehouse

  function index1(){
    return view('firebase');
  }
}
