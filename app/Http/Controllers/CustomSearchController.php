<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Spatie\QueryBuilder\QueryBuilder;

class CustomSearchController extends Controller
{
//Custom search

//hostel
 function hostel_search(Request $request){
    // Get the search value from the request
         $address = $request->input('address');
         $attached_toilet = $request->input('attached_toilet');
         $attached_varanda = $request->input('attached_varanda');
         $hot_water = $request->input('hot_water');
         $ac = $request->input('ac');
         $wifi = $request->input('wifi');
         $laundry = $request->input('laundry');
         $lift = $request->input('lift');
         $furnished = $request->input('furnished');
         $cable_tv = $request->input('cable_tv');
         $parking = $request->input('parking');
        // Search in the title and body columns from the posts table
            $array = Hostel::query()

             ->where('address', 'LIKE', "%{$address}%")
             ->where('attached_toilet', 'LIKE', "%{$attached_toilet}%")
             ->where('attached_varanda', 'LIKE', "%{$attached_varanda}%")
             ->where('hot_water', 'LIKE', "%{$hot_water}%")
             ->where('ac', 'LIKE', "%{$ac}%")
             ->where('wifi', 'LIKE', "%{$wifi}%")
             ->where('laundry', 'LIKE', "%{$laundry}%")
             ->where('lift', 'LIKE', "%{$lift}%")
             ->where('furnished', 'LIKE', "%{$furnished}%")
             ->where('cable_tv', 'LIKE', "%{$cable_tv}%")
             ->where('parking', 'LIKE', "%{$parking}%")

            ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.hostel.custom_hostel_search', compact('array'));
    }

    function hostel_custom_details($id){
          $array= Hostel:: findOrFail($id);

          return view('Dashboard.search.custom_search.hostel.custom_hostel_details',compact('array'));
        }
//end hostel

//bilboard
  function bilboard_search(Request $request){
    // Get the search value from the request
         $address = $request->input('address');
         $electricity = $request->input('electricity');

        // Search in the title and body columns from the posts table
            $array = Bilboard::query()

             ->where('address', 'LIKE', "%{$address}%")
             ->where('electricity', 'LIKE', "%{$electricity}%")

            ->get();

        // Return the search view with the resluts compacted

        return view('Dashboard.search.custom_search.billboard.custom_billboard_search', compact('array'));
    }

    function bilboard_custom_details($id){
          $array= Bilboard:: findOrFail($id);

          return view('Dashboard.search.custom_search.billboard.custom_billboard_details',compact('array'));
        }
//end bilboard
//flat
    function flat_search(Request $request){
       // Get the search value from the request
            $address = $request->input('address');
            $attached_toilet = $request->input('attached_toilet');
            $attached_varanda = $request->input('attached_varanda');
            $hot_water = $request->input('hot_water');
            $ac = $request->input('ac');
            $wifi = $request->input('wifi');
            $laundry = $request->input('laundry');
            $lift = $request->input('lift');
            $furnished = $request->input('furnished');
            $cable_tv = $request->input('cable_tv');
            $parking = $request->input('parking');
           // Search in the title and body columns from the posts table
               $array = Flat::query()

                ->where('address', 'LIKE', "%{$address}%")
                ->where('attached_toilet', 'LIKE', "%{$attached_toilet}%")
                ->where('attached_varanda', 'LIKE', "%{$attached_varanda}%")
                ->where('hot_water', 'LIKE', "%{$hot_water}%")
                ->where('ac', 'LIKE', "%{$ac}%")
                ->where('wifi', 'LIKE', "%{$wifi}%")
                ->where('laundry', 'LIKE', "%{$laundry}%")
                ->where('lift', 'LIKE', "%{$lift}%")
                ->where('furnished', 'LIKE', "%{$furnished}%")
                ->where('cable_tv', 'LIKE', "%{$cable_tv}%")
                ->where('parking', 'LIKE', "%{$parking}%")

               ->get();

           // Return the search view with the resluts compacted

           return view('Dashboard.search.custom_search.flat.custom_flat_search', compact('array'));
       }

       function flat_custom_details($id){
             $array= Flat:: findOrFail($id);

             return view('Dashboard.search.custom_search.flat.custom_flat_details',compact('array'));
           }
//end flat
//hotel
      function hotel_search(Request $request){
         // Get the search value from the request
              $location = $request->input('location');
              $guest_count = $request->input('guest_count');
              $bathroom = $request->input('bathroom');
              $wifi = $request->input('wifi');
              $security = $request->input('security');
              $lift = $request->input('lift');
              $furnished = $request->input('furnished');
              $cctv = $request->input('cctv');
              $parking = $request->input('parking');
             // Search in the title and body columns from the posts table
                 $array = Hotel::query()

                  ->where('location', 'LIKE', "%{$location}%")
                  ->where('guest_count', 'LIKE', "%{$guest_count}%")
                  ->where('bathroom', 'LIKE', "%{$bathroom}%")
                  ->where('wifi', 'LIKE', "%{$wifi}%")
                  ->where('lift', 'LIKE', "%{$lift}%")
                  ->where('furnished', 'LIKE', "%{$furnished}%")
                  ->where('cctv', 'LIKE', "%{$cctv}%")
                  ->where('parking', 'LIKE', "%{$parking}%")

                 ->get();

             // Return the search view with the resluts compacted

             return view('Dashboard.search.custom_search.hotel.custom_hotel_search', compact('array'));
         }

         function hotel_custom_details($id){
               $array= Hotel:: findOrFail($id);

               return view('Dashboard.search.custom_search.hotel.custom_hotel_details',compact('array'));
             }
//end hotel
//room
    function room_search(Request $request){
   // Get the search value from the request
        $address = $request->input('address');
        $attached_toilet = $request->input('attached_toilet');
        $attached_varanda = $request->input('attached_varanda');
        $hot_water = $request->input('hot_water');
        $ac = $request->input('ac');
        $wifi = $request->input('wifi');
        $laundry = $request->input('laundry');
        $lift = $request->input('lift');
        $furnished = $request->input('furnished');
        $cable_tv = $request->input('cable_tv');
        $parking = $request->input('parking');
       // Search in the title and body columns from the posts table
           $array = Room::query()

            ->where('address', 'LIKE', "%{$address}%")
            ->where('attached_toilet', 'LIKE', "%{$attached_toilet}%")
            ->where('attached_varanda', 'LIKE', "%{$attached_varanda}%")
            ->where('hot_water', 'LIKE', "%{$hot_water}%")
            ->where('ac', 'LIKE', "%{$ac}%")
            ->where('wifi', 'LIKE', "%{$wifi}%")
            ->where('laundry', 'LIKE', "%{$laundry}%")
            ->where('lift', 'LIKE', "%{$lift}%")
            ->where('furnished', 'LIKE', "%{$furnished}%")
            ->where('cable_tv', 'LIKE', "%{$cable_tv}%")
            ->where('parking', 'LIKE', "%{$parking}%")

           ->get();

       // Return the search view with the resluts compacted

       return view('Dashboard.search.custom_search.room.custom_room_search', compact('array'));
   }

   function room_custom_details($id){
         $array= Room:: findOrFail($id);
         return view('Dashboard.search.custom_search.room.custom_room_details',compact('array'));
       }
//end room
//parking Spot
    function parking_spot_search (){
      $array = QueryBuilder::for(Parking_Spot::class)
         ->allowedFilters(['address', 'price','vehicle_type'])
         ->get();

        return view('Dashboard.search.custom_search.parking_spot.custom_parking_search', compact('array'));
    }
    function parking_spot_custom_details($id){
          $array= Parking_Spot:: findOrFail($id);
          return view('Dashboard.search.custom_search.parking_spot.custom_parking_details',compact('array'));
        }
//end parking spot
//resort
    function restaurant_search (){
      $array = QueryBuilder::for(Restaurant::class)
         ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','attached_varanda','hot_water',
         'laundry','ac','cable_tv','parking','dining','spa','gym','sports','swimmingpool'])
         ->get();

        return view('Dashboard.search.custom_search.resort.custom_restaurant_search', compact('array'));
    }
    function restaurant_custom_details($id){
          $array= Restaurant:: findOrFail($id);
          return view('Dashboard.search.custom_search.resort.custom_restaurant_details',compact('array'));
        }
//end resort
//office
    function office_search (){
      $array = QueryBuilder::for(Office::class)
         ->allowedFilters(['address', 'price','fire_safety','lift','emergency_lift','utilities','parking'])
         ->get();

        return view('Dashboard.search.custom_search.office.custom_office_search', compact('array'));
    }
    function office_custom_details($id){
          $array= Office:: findOrFail($id);
          return view('Dashboard.search.custom_search.office.custom_office_details',compact('array'));
        }
//end office
//shop
    function shop_search (){

      $array = QueryBuilder::for(Shop::class)
         ->allowedFilters(['address', 'price','fire_safety','lift','utilities','parking'])
         ->get();

        return view('Dashboard.search.custom_search.shop.custom_shop_search', compact('array'));
    }
    function shop_custom_details($id){

          $array= Shop:: findOrFail($id);
          return view('Dashboard.search.custom_search.shop.custom_shop_details',compact('array'));

        }
//end shop

//Community_Center
    function community_search(){

      $array = QueryBuilder::for(Community_Center::class)
         ->allowedFilters(['address', 'price','fire_safety','lift','utilities','parking','garden','cooking','Emergency Stair','wifi'])
         ->get();

        return view('Dashboard.search.custom_search.community_hall.custom_community_search', compact('array'));
    }
    function community_custom_details($id){
          $array= Community_Center:: findOrFail($id);
          return view('Dashboard.search.custom_search.community_hall.custom_community_details',compact('array'));
        }
//end Community_Center

//factory
    function factory_search(){

      $array = QueryBuilder::for(Factory::class)
         ->allowedFilters(['address', 'price','fire_safety','lift','utilities','parking','garden','cooking','Emergency Stair','wifi'])
         ->get();

        return view('Dashboard.search.custom_search.factory.custom_factory_search', compact('array'));
    }
    function factory_custom_details($id){
          $array= Factory:: findOrFail($id);
          return view('Dashboard.search.custom_search.factory.custom_factory_details',compact('array'));
        }
//end factory

//Warehouse
    function warehouse_search(){

      $array = QueryBuilder::for(Warehouse::class)
         ->allowedFilters(['address', 'price','type','floor_level','floor_size','road_width','drainage_system','fire_safety','lift','utilities','parking','garden','cooking','Emergency Stair','wifi'])
         ->get();

        return view('Dashboard.search.custom_search.warehouse.custom_warehouse_search', compact('array'));
    }
    function warehouse_custom_details($id){
          $array= Warehouse:: findOrFail($id);
          return view('Dashboard.search.custom_search.warehouse.custom_warehouse_details',compact('array'));
        }
//end Warehouse

//Land
    function land_search(){

      $array = QueryBuilder::for(land::class)
         ->allowedFilters(['address', 'price','land_area','vegetations','road_width'])
         ->get();

        return view('Dashboard.search.custom_search.land.custom_land_search', compact('array'));
    }
    function land_custom_details($id){
          $array= Land:: findOrFail($id);
          return view('Dashboard.search.custom_search.land.custom_land_details',compact('array'));
        }
//end Land

//pond
    function pond_search(){

      $array = QueryBuilder::for(Pond::class)
         ->allowedFilters(['address', 'price','land_area','vegetations','road_width'])
         ->get();

        return view('Dashboard.search.custom_search.pond.custom_pond_search', compact('array'));
    }
    function pond_custom_details($id){
          $array= Pond:: findOrFail($id);
          return view('Dashboard.search.custom_search.pond.custom_pond_details',compact('array'));
        }
//end pond

//swimmingpool
    function swimmingpool_search(){

      $array = QueryBuilder::for(Swimming_Pool::class)
         ->allowedFilters(['address', 'price','wifi','laundry','toilet','parking'])
         ->get();

        return view('Dashboard.search.custom_search.swimmingpool.custom_swimmingpool_search', compact('array'));
    }
    function swimmingpool_custom_details($id){
          $array= Swimming_Pool:: findOrFail($id);
          return view('Dashboard.search.custom_search.swimmingpool.custom_swimmingpool_details',compact('array'));
        }
//end swimmingpool

//playground
    function playground_search(){

      $array = QueryBuilder::for(Play_ground::class)
         ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','change_room','hot_water',
         'laundry','ac','cable_tv','parking','dining','spa','gym','sports','swimmingpool'])
         ->get();

        return view('Dashboard.search.custom_search.playground.custom_playground_search', compact('array'));
    }
    function playground_custom_details($id){
          $array= Play_ground:: findOrFail($id);
          return view('Dashboard.search.custom_search.playground.custom_playground_details',compact('array'));
        }
//end playground

//shootingspot
    function shootingspot_search(){

      $array = QueryBuilder::for(Shooting_Spot::class)
         ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','change_room','hot_water',
         'laundry','ac','cable_tv','parking','cooking'])
         ->get();

        return view('Dashboard.search.custom_search.shooting_spot.custom_shootingspot_search', compact('array'));
    }
    function shootingspot_custom_details($id){
          $array= Shooting_Spot:: findOrFail($id);
          return view('Dashboard.search.custom_search.shooting_spot.custom_shootingspot_details',compact('array'));
        }
//end shootingspot

//exibution center
    function exibution_search(){

      $array = QueryBuilder::for(Exibution_Center::class)
         ->allowedFilters(['address', 'price','vehicle_type','wifi','attached_toilet','utilities','lift','furnished','change_room','hot_water',
         'laundry','ac','cable_tv','parking','cooking'])
         ->get();

        return view('Dashboard.search.custom_search.exibution.custom_exibution_search', compact('array'));
    }
    function exibution_custom_details($id){
          $array= Exibution_Center:: findOrFail($id);
          return view('Dashboard.search.custom_search.exibution.custom_exibution_details',compact('array'));
        }
//end exibution center

//Rooftop
    function rooftop_search(){

      $array = QueryBuilder::for(Rooftop::class)
         ->allowedFilters(['address', 'price','utilities','lift','shed','parking'])
         ->get();

        return view('Dashboard.search.custom_search.rooftop.custom_rooftop_search', compact('array'));
    }
    function rooftop_custom_details($id){
          $array= Rooftop:: findOrFail($id);
          return view('Dashboard.search.custom_search.rooftop.custom_rooftop_details',compact('array'));
        }
//end Rooftop
//end custom search
}
