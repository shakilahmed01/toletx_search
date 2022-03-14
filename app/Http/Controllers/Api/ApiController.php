<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
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
use App\Models\Warehouse;
use App\Models\Exibution_Center;
use App\Models\Pond;
use App\Models\Rooftop;
use App\Models\Shooting_Spot;
use App\Models\Play_ground;
use App\Models\Swimming_Pool;
use App\Models\Restaurant;
use App\Models\Shop;
use App\Models\Land;
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

    public function createapi_warehouse(){
      $warehouse=Warehouse::all();
      return $warehouse;
    }

    public function createapi_exhibution(){
      $exhibution=Exibution_Center::all();
      return $exhibution;
    }

    public function createapi_pond(){
      $pond=Pond::all();
      return $pond;
    }

    public function createapi_rooftop(){
      $rooftop=Rooftop::all();
      return $rooftop;
    }

    public function createapi_shooting(){
      $shooting=Shooting_Spot::all();
      return $shooting;
    }

    public function createapi_playground(){
      $playground=Play_ground::all();
      return $playground;
    }

    public function createapi_swimmingpool(){
      $swimmingpool=Swimming_Pool::all();
      return $swimmingpool;
    }

    public function createapi_restaurant(){
      $restaurant=Restaurant::all();
      return $restaurant;
    }

    public function createapi_shop(){
      $shop=Shop::all();
      return $shop;
    }

    public function createapi_office(){
      $office=Office::all();
      return $office;
    }


//post function start


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

//end room

   function api_post_land(Request $request){

         $land=Land::create([
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

               $success['token'] =  $land->createToken('MyApp')->accessToken;
               $success['post_type'] =  $land->post_type;

               return $this->sendResponse($success, 'land post successfully.');
   }

//end land

    function api_post_community(Request $request){

      $community=Community_Center::create([
        'user_id'=>$request->user_id,
        'post_type'=>$request->post_type,
        'community_name'=>$request->community_name,
        'address'=>$request->address,
        'floor_level'=>$request->floor_level,
        'floor_size'=>$request->floor_size,
        'road_width'=>$request->road_width,
        'utilities'=>$request->utilities,
        'interior_condition'=>$request->interior_condition,
        'fire_safety'=>$request->fire_safety,
        'lift'=>$request->lift,
        'wifi'=>$request->wifi,
        'garden'=>$request->garden,
        'cooking'=>$request->cooking,
        'sitting'=>$request->sitting,
        'parking'=>$request->parking,
        'price'=>$request->price,
        'photo'=>$request->photo,
        'created_at'   =>Carbon::now()
      ]);
      if ($request->hasFile('photo')) {
          $photo_upload     =  $request ->photo;
          $photo_extension  =  $photo_upload -> getClientOriginalExtension();
          $photo_name       =  "toletx_community_image_". $community . "." . $photo_extension;
          Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/communities/'.$photo_name),100);
          Community_Center::find($community)->update([
          'photo'          => $photo_name,
              ]);
            }

            $success['token'] =  $community->createToken('MyApp')->accessToken;
            $success['post_type'] =  $community->post_type;

            return $this->sendResponse($success, 'community post successfully.');
   }
//end community
        function api_post_shooting(Request $request){

          $shooting=Shooting_Spot::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'shooting_name'=>$request->shooting_name,
            'address'=>$request->address,
            'floor_level'=>$request->floor_level,
            'floor_size'=>$request->floor_size,
            'road_width'=>$request->road_width,
            'utilities'=>$request->utilities,
            'building_condition'=>$request->building_condition,
            'fire_safety'=>$request->fire_safety,
            'lift'=>$request->lift,
            'wifi'=>$request->wifi,
            'garden'=>$request->garden,
            'cooking'=>$request->cooking,
            'sitting'=>$request->sitting,
            'parking'=>$request->parking,
            'vegetations'=>$request->vegetations,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_shooting_image_". $shooting . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/shootings/'.$photo_name),100);
              Shooting_Spot::find($shooting)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $shooting->createToken('MyApp')->accessToken;
                $success['post_type'] =  $shooting->post_type;

                return $this->sendResponse($success, 'shooting post successfully.');
        }
//end shooting

      function api_post_shop(Request $request){

        $shop=Shop::create([
          'user_id'=>$request->user_id,
          'post_type'=>$request->post_type,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'interior_condition'=>$request->interior_condition,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_shop_image_". $shop . "." . $photo_extension;
            Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/shops/'.$photo_name),100);
            Shop::find($shop)->update([
            'photo'          => $photo_name,
                ]);
              }

              $success['token'] =  $shop->createToken('MyApp')->accessToken;
              $success['post_type'] =  $shop->post_type;

              return $this->sendResponse($success, 'shop post successfully.');
      }
//end shop

      function api_post_factory(Request $request){

        $factory=Factory::create([
          'user_id'=>$request->user_id,
          'post_type'=>$request->post_type,
          'factory_name'=>$request->factory_name,
          'address'=>$request->address,
          'floor_level'=>$request->floor_level,
          'floor_size'=>$request->floor_size,
          'road_width'=>$request->road_width,
          'utilities'=>$request->utilities,
          'building_condition'=>$request->building_condition,
          'fire_safety'=>$request->fire_safety,
          'lift'=>$request->lift,
          'interior_condition'=>$request->interior_condition,
          'drainage_system'=>$request->drainage_system,
          'parking'=>$request->parking,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_factory_image_". $factory . "." . $photo_extension;
            Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/factories/'.$photo_name),100);
            Factory::find($factory)->update([
            'photo'          => $photo_name,
                ]);
              }

              $success['token'] =  $factory->createToken('MyApp')->accessToken;
              $success['post_type'] =  $factory->post_type;

              return $this->sendResponse($success, 'factory post successfully.');
      }
//end factory

        function api_post_warehouse(Request $request){

          $warehouse=Warehouse::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'type'=>$request->type,
            'address'=>$request->address,
            'floor_level'=>$request->floor_level,
            'floor_size'=>$request->floor_size,
            'road_width'=>$request->road_width,
            'utilities'=>$request->utilities,
            'building_condition'=>$request->building_condition,
            'fire_safety'=>$request->fire_safety,
            'lift'=>$request->lift,
            'interior_condition'=>$request->interior_condition,
            'drainage_system'=>$request->drainage_system,
            'parking'=>$request->parking,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_warehouse_image_". $warehouse . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/warehouses/'.$photo_name),100);
              Warehouse::find($warehouse)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $warehouse->createToken('MyApp')->accessToken;
                $success['post_type'] =  $warehouse->post_type;

                return $this->sendResponse($success, 'warehouse post successfully.');
        }

//end warehouse

      function api_post_pond(Request $request){

        $pond=Pond::create([
          'user_id'=>$request->user_id,
          'post_type'=>$request->post_type,
          'address'=>$request->address,
          'purpose'=>$request->purpose,
          'pond_area'=>$request->pond_area,
          'water_level'=>$request->water_level,
          'road_width'=>$request->road_width,
          'drainage_system'=>$request->drainage_system,
          'price'=>$request->price,
          'photo'=>$request->photo,
          'created_at'   =>Carbon::now()
        ]);
        if ($request->hasFile('photo')) {
            $photo_upload     =  $request ->photo;
            $photo_extension  =  $photo_upload -> getClientOriginalExtension();
            $photo_name       =  "toletx_pond_image_". $pond . "." . $photo_extension;
            Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/ponds/'.$photo_name),100);
            Pond::find($pond)->update([
            'photo'          => $photo_name,
                ]);
              }

              $success['token'] =  $pond->createToken('MyApp')->accessToken;
              $success['post_type'] =  $pond->post_type;

              return $this->sendResponse($success, 'pond post successfully.');
      }
//end pond

        function api_post_swimmingpool(Request $request){

          $swimmingpool=Swimming_Pool::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'type'=>$request->type,
            'address'=>$request->address,
            'size'=>$request->size,
            'toilet'=>$request->toilet,
            'wifi'=>$request->wifi,
            'laundry'=>$request->laundry,
            'change_room'=>$request->change_room,
            'parking'=>$request->parking,
            'laundry'=>$request->laundry,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_swimmingpool_image_". $swimmingpool . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/swimmingpools/'.$photo_name),100);
              Swimming_Pool::find($swimmingpool)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $swimmingpool->createToken('MyApp')->accessToken;
                $success['post_type'] =  $swimmingpool->post_type;

                return $this->sendResponse($success, 'swimmingpool post successfully.');
        }
//end swimmingpool

        function api_post_bilboard(Request $request){

          $bilboard=Bilboard::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'type'=>$request->type,
            'address'=>$request->address,
            'size'=>$request->size,
            'hieght'=>$request->hieght,
            'electricity'=>$request->electricity,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_bilboard_image_". $bilboard . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/bilboards/'.$photo_name),100);
              Bilboard::find($bilboard)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $bilboard->createToken('MyApp')->accessToken;
                $success['post_type'] =  $bilboard->post_type;

                return $this->sendResponse($success, 'bilboard post successfully.');
        }
//end bilboard

          function api_post_rooftop(Request $request){

            $rooftop=Rooftop::create([
              'user_id'=>$request->user_id,
              'post_type'=>$request->post_type,
              'address'=>$request->address,
              'floor_area'=>$request->floor_area,
              'utilities'=>$request->utilities,
              'shed'=>$request->shed,
              'protection'=>$request->protection,
              'lift'=>$request->lift,
              'interior_condition'=>$request->interior_condition,
              'parking'=>$request->parking,
              'price'=>$request->price,
              'photo'=>$request->photo,
              'created_at'   =>Carbon::now()
            ]);
            if ($request->hasFile('photo')) {
                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_rooftop_image_". $rooftop . "." . $photo_extension;
                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/rooftops/'.$photo_name),100);
                Rooftop::find($rooftop)->update([
                'photo'          => $photo_name,
                    ]);
                  }

                  $success['token'] =  $rooftop->createToken('MyApp')->accessToken;
                  $success['post_type'] =  $rooftop->post_type;

                  return $this->sendResponse($success, 'rooftop post successfully.');
          }
//end rooftop

          function api_post_resort(Request $request){

            $restaurant=Restaurant::create([
              'user_id'=>$request->user_id,
              'post_type'=>$request->post_type,
              'resort_name'=>$request->resort_name,
              'address'=>$request->address,
              'room_size'=>$request->room_size,
              'room_type'=>$request->room_type,
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
              'dining'=>$request->dining,
              'sports'=>$request->sports,
              'gym'=>$request->gym,
              'spa'=>$request->spa,
              'swimmingpool'=>$request->swimmingpool,
              'price'=>$request->price,
              'photo'=>$request->photo,
              'created_at'   =>Carbon::now()
            ]);
            if ($request->hasFile('photo')) {
                $photo_upload     =  $request ->photo;
                $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                $photo_name       =  "toletx_restaurant_image_". $restaurant . "." . $photo_extension;
                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/restaurants/'.$photo_name),100);
                Restaurant::find($restaurant)->update([
                'photo'          => $photo_name,
                    ]);
                  }

                  $success['token'] =  $restaurant->createToken('MyApp')->accessToken;
                  $success['post_type'] =  $restaurant->post_type;

                  return $this->sendResponse($success, 'restaurant post successfully.');
          }
//end restaurant

        function api_post_exibution(Request $request){

          $exibution_center=Exibution_Center::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'exibution_center_name'=>$request->exibution_center_name,
            'address'=>$request->address,
            'room_size'=>$request->room_size,
            'room_type'=>$request->room_type,
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
            'dining'=>$request->dining,
            'sports'=>$request->sports,
            'gym'=>$request->gym,
            'spa'=>$request->spa,
            'swimmingpool'=>$request->swimmingpool,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_exibution_center_image_". $exibution_center . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/exibution_centers/'.$photo_name),100);
              Exibution_Center::find($exibution_center)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $exibution_center->createToken('MyApp')->accessToken;
                $success['post_type'] =  $exibution_center->post_type;

                return $this->sendResponse($success, 'exibution_center post successfully.');
        }
//end exhibution

        function api_post_playground(Request $request){

          $playground=Play_ground::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'address'=>$request->address,
            'type'=>$request->type,
            'attached_toilet'=>$request->attached_toilet,
            'utilities'=>$request->utilities,
            'laundry'=>$request->laundry,
            'change_room'=>$request->change_room,
            'wifi'=>$request->wifi,
            'furnished'=>$request->furnished,
            'ac'=>$request->ac,
            'parking'=>$request->parking,
            'dining'=>$request->dining,
            'sports'=>$request->sports,
            'gym'=>$request->gym,
            'spa'=>$request->spa,
            'swimmingpool'=>$request->swimmingpool,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_play_ground_image_". $playground . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/playgrounds/'.$photo_name),100);
              Play_ground::find($playground)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $playground->createToken('MyApp')->accessToken;
                $success['post_type'] =  $playground->post_type;

                return $this->sendResponse($success, 'playground post successfully.');
        }
//end playground

        function api_post_hotel(Request $request){

          $hotel=Hotel::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'hotel_name'=>$request->hotel_name,
            'location'=>$request->location,
            'wifi'=>$request->wifi,
            'bathroom'=>$request->bathroom,
            'cctv'=>$request->cctv,
            'lift'=>$request->lift,
            'furnished'=>$request->furnished,
            'security'=>$request->security,
            'parking'=>$request->parking,
            'price'=>$request->price,
            'guest_count'=>$request->guest_count,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_hotel_image_". $hotel . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/hotels/' .$photo_name),100);
              Hotel::find($hotel)->update([
              'photo'          => $photo_name,
                  ]);
                }
                $success['token'] =  $hotel->createToken('MyApp')->accessToken;
                $success['post_type'] =  $hotel->post_type;

                return $this->sendResponse($success, 'hotel post successfully.');
        }
//end hotel

          function api_post_flat(Request $request){

            $flat=Flat::create([
              'user_id'=>$request->user_id,
              'post_type'=>$request->post_type,
              'address'=>$request->address,
              'flat_size'=>$request->flat_size,
              'description'=>$request->description,
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
                $photo_name       =  "toletx_flat_image_". $flat . "." . $photo_extension;
                Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/flats/'.$photo_name),100);
                Flat::find($flat)->update([
                'photo'          => $photo_name,
                    ]);
                  }

                  $success['token'] =  $flat->createToken('MyApp')->accessToken;
                  $success['post_type'] =  $flat->post_type;

                  return $this->sendResponse($success, 'flat post successfully.');
          }
//end flat

        function api_post_parking(Request $request){

          $parking=Parking_Spot::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'address'=>$request->address,
            'price'=>$request->price,
            'floor_level'=>$request->floor_level,
            'floor_height'=>$request->floor_height,
            'vehicle_type'=>$request->vehicle_type,
            'description'=>$request->description,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_parking_spot_image_". $parking . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/parkings/'.$photo_name),100);
              Parking_Spot::find($parking)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $parking->createToken('MyApp')->accessToken;
                $success['post_type'] =  $parking->post_type;

                return $this->sendResponse($success, 'parking post successfully.');
        }
//end parking

        function api_post_hostel(Request $request){

          $hostel=Hostel::create([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'hostel_name'=>$request->hostel_name,
            'address'=>$request->address,
            'room_size'=>$request->room_size,
            'room_type'=>$request->room_type,
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
              $photo_name       =  "toletx_hostel_image_". $hostel . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/hostels/'.$photo_name),100);
              Hostel::find($hostel)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $hostel->createToken('MyApp')->accessToken;
                $success['post_type'] =  $hostel->post_type;

                return $this->sendResponse($success, 'hostel post successfully.');
        }

        function api_hostel_edit($id){
          $list=Hostel::findOrFail($id);
          return $list;
        }

        function hostel_delete($id){
            $list=Hostel::findOrFail($id)->delete();
            return back();
          }

        function hostel_update(Request $request){

                $hostel=Hostel::findOrFail($request->id)->update([
                  'user_id'=>$request->user_id,
                  'post_type'=>$request->post_type,
                  'hostel_name'=>$request->hostel_name,
                  'address'=>$request->address,
                  'room_size'=>$request->room_size,
                  'room_type'=>$request->room_type,
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

                ]);


                if ($request->hasFile('photo')) {

                    $photo_upload     =  $request ->photo;
                    $photo_extension  =  $photo_upload -> getClientOriginalExtension();
                    $photo_name       =  "toletx_hostel_image_". $hostel . "." . $photo_extension;
                    Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/hostels/'.$photo_name),100);
                    Hostel::find($hostel)->update([
                    'photo'          => $photo_name,
                        ]);


                      }

                    return $hostel;
          }
//end hostel

        function api_post_office(Request $request){

          $office=Office::insertGetId([
            'user_id'=>$request->user_id,
            'post_type'=>$request->post_type,
            'address'=>$request->address,
            'floor_level'=>$request->floor_level,
            'floor_size'=>$request->floor_size,
            'road_width'=>$request->road_width,
            'utilities'=>$request->utilities,
            'interior_condition'=>$request->interior_condition,
            'fire_safety'=>$request->fire_safety,
            'lift'=>$request->lift,
            'emergency_lift'=>$request->emergency_lift,
            'parking'=>$request->parking,
            'price'=>$request->price,
            'photo'=>$request->photo,
            'created_at'   =>Carbon::now()
          ]);
          if ($request->hasFile('photo')) {
              $photo_upload     =  $request ->photo;
              $photo_extension  =  $photo_upload -> getClientOriginalExtension();
              $photo_name       =  "toletx_office_image_". $office . "." . $photo_extension;
              Image::make($photo_upload)->resize(452,510)->save(base_path('public/uploads/offices/'.$photo_name),100);
              Office::find($office)->update([
              'photo'          => $photo_name,
                  ]);
                }

                $success['token'] =  $office->createToken('MyApp')->accessToken;
                $success['post_type'] =  $office->post_type;

                return $this->sendResponse($success, 'office post successfully.');
        }
//end office

}
