<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use App\Models\Hotel;
use App\Models\Hostel;
use App\Models\Bilboard;
use App\Models\Flat;
use App\Models\Parking_Spot;
use App\Models\Community_Center;
use App\Models\Office;
use App\Models\Factory;
use Carbon\Carbon;
use Image;
class ApiController extends Controller
{
    //
    public function createapi_user_registration(){
      $user=user::all();
      return $user;
    }

    public function createapi_room(){
      $room=Room::all();
      return $room;
    }

    public function createapi_hotel(){
      $hotel=Hotel::all();
      return $hotel;
    }

    public function createapi_hostel(){
      $hostel=Hostel::all();
      return $hostel;
    }

    public function createapi_bilboard(){
      $bilboard=Bilboard::all();
      return $bilboard;
    }

    public function createapi_community(){
      $community=Community_Center::all();
      return $community;
    }

    public function createapi_flat(){
      $flat=Flat::all();
      return $flat;
    }

    public function createapi_parking(){
      $parking=Parking_Spot::all();
      return $parking;
    }

    public function createapi_factory(){
      $factory=Factory::all();
      return $factory;
    }

    public function api_post_room(Request $request)
   {
       $room = Room::create([
         'user_id'=>$request->user_id,
         'post_type'=>$request->post_type,
         'hotel_name'=>$request->hotel_name,
         'address'=>$request->address,
         'room_size'=>$request->room_size,
         'attached_toilet'=>$request->attached_toilet,
         'utilities'=>$request->utilities,
         'attached_varanda'=>$request->attached_varanda,
         'hot_water'=>$request->hot_water,
         'laundry'=>$request->laundry,
         'ac'=>$request->ac,
         'cable_tv'=>$request->cable_tv,
         'wifi'=>$request->wifi,
         'lift'=>$request->lift,
         'furnished'=>$request->furnished,
         'parking'=>$request->parking,
         'price'=>$request->price,
         'photo'=>$request->photo,
         'created_at'   =>Carbon::now()
       ]);

       if ($request->hasFile('photo')) {
           $photo_upload     =  $request ->photo;
           $photo_extension  =  $photo_upload -> getClientOriginalExtension();
           $photo_name       =  "toletx_room_image_". $room . "." . $photo_extension;
           Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/rooms/' .$photo_name),100);
           Room::find($hotel)->update([
           'photo'          => $photo_name,
               ]);
             }

       return response()->json($room, 201);
   }

   function api_post_land(Request $request){

     $land=Land::insertGetId([
       'user_id'=>$request->user_id,
       'post_type'=>$request->post_type,
       'address'=>$request->address,
       'land_area'=>$request->land_area,
       'vegetations'=>$request->vegetations,
       'road_width'=>$request->road_width,
       'price'=>$request->price,
       'photo'=>$request->photo,
       'created_at'   =>Carbon::now()
     ]);
     if ($request->hasFile('photo')) {
         $photo_upload     =  $request ->photo;
         $photo_extension  =  $photo_upload -> getClientOriginalExtension();
         $photo_name       =  "toletx_land_image_". $land . "." . $photo_extension;
         Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/lands/'.$photo_name),100);
         Land::find($land)->update([
         'photo'          => $photo_name,
             ]);
           }

           return response()->json($land);
   }


}
