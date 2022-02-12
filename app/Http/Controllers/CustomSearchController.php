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
         'laundry','ac','cable_tv','parking','dining','spa','gym','sports','swimmingpool','price'])
         ->get();

        return view('Dashboard.search.custom_search.resort.custom_restaurant_search', compact('array'));
    }
    function restaurant_custom_details($id){
          $array= Restaurant:: findOrFail($id);
          return view('Dashboard.search.custom_search.resort.custom_restaurant_details',compact('array'));
        }
//end resort
//end custom search
}
