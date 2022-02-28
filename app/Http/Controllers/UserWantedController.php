<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Auth;
use App\Models\User;
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
class UserWantedController extends Controller
{
    //
    function post_bilboard(){
      return view('wanted.post_bilboard');
    }
    function list_billboard(){
      $paginate=Bilboard::latest()->simplePaginate(15);
      $lists=Bilboard::where('user_id', auth()->id())->get();
      return view('wanted.list_billboard',compact('lists','paginate'));
    }
    function post_room(){
      return view('wanted.post_room');
    }
    function list_room(){
      $paginate=Room::latest()->simplePaginate(15);
      $lists=Room::where('user_id', auth()->id())->get();
      return view('wanted.list_room',compact('lists','paginate'));
    }
    function post_hostel(){
      return view('wanted.post_hostel');
    }
    function list_hostel(){
      $paginate=Hostel::latest()->simplePaginate(15);
      $lists=Hostel::where('user_id', auth()->id())->get();
      return view('wanted.list_hostel',compact('lists','paginate'));
    }
    function post_hotel(){
      return view('wanted.post_hotel');
    }
    function list_hotel(){
      $paginate=Hotel::latest()->simplePaginate(15);
      $lists=Hotel::where('user_id', auth()->id())->get();
      return view('wanted.list_hotel',compact('lists','paginate'));
    }
    function post_flat(){
      return view('wanted.post_flat');
    }
    function list_flat(){
      $paginate=Flat::latest()->simplePaginate(15);
      $lists=Flat::where('user_id', auth()->id())->get();
      return view('wanted.list_flat',compact('lists','paginate'));
    }
    function post_resort(){
      return view('wanted.post_resort');
    }
    function list_resort(){
      $paginate=Restaurant::latest()->simplePaginate(15);
      $lists=Restaurant::where('user_id', auth()->id())->get();
      return view('wanted.list_resort',compact('lists','paginate'));
    }
    function post_parking_spot(){
      return view('wanted.post_parking_spot');
    }
    function list_parking_spot(){
      $paginate=Parking_Spot::latest()->simplePaginate(15);
      $lists=Parking_Spot::where('user_id', auth()->id())->get();
      return view('wanted.list_parking_spot',compact('lists','paginate'));
    }
    function post_office(){
      return view('wanted.post_office');
    }
    function list_office(){
      $paginate=Office::latest()->simplePaginate(15);
      $lists=Office::where('user_id', auth()->id())->get();
      return view('wanted.list_office',compact('lists','paginate'));
    }
    function post_community(){
      return view('wanted.post_community');
    }
    function list_community(){
      $paginate=Community_Center::latest()->simplePaginate(15);
      $lists=Community_Center::where('user_id', auth()->id())->get();
      return view('wanted.list_community',compact('lists','paginate'));
    }
    function post_warehouse(){
      return view('wanted.post_warehouse');
    }
    function list_warehouse(){
      $paginate=Warehouse::latest()->simplePaginate(15);
      $lists=Warehouse::where('user_id', auth()->id())->get();
      return view('wanted.list_warehouse',compact('lists','paginate'));
    }
    function post_land(){
      return view('wanted.post_land');
    }
    function list_land(){
      $paginate=Land::latest()->simplePaginate(15);
      $lists=Land::where('user_id', auth()->id())->get();
      return view('wanted.list_land',compact('lists','paginate'));
    }
    function post_pond(){
      return view('wanted.post_pond');
    }
    function list_pond(){
      $paginate=Pond::latest()->simplePaginate(15);
      $lists=Pond::where('user_id', auth()->id())->get();
      return view('wanted.list_pond',compact('lists','paginate'));
    }
    function post_swimmingpool(){
      return view('wanted.post_swimmingpool');
    }
    function list_swimmingpool(){
      $paginate=Swimming_Pool::latest()->simplePaginate(15);
      $lists=Swimming_Pool::where('user_id', auth()->id())->get();
      return view('wanted.list_swimmingpool',compact('lists','paginate'));
    }
    function post_playground(){
      return view('wanted.post_playground');
    }
    function list_playground(){
      $paginate=Play_ground::latest()->simplePaginate(15);
      $lists=Play_ground::where('user_id', auth()->id())->get();
      return view('wanted.list_playground',compact('lists','paginate'));
    }
    function post_shooting(){
      return view('wanted.post_shooting');
    }
    function list_shooting(){
      $paginate=Shooting_Spot::latest()->simplePaginate(15);
      $lists=Shooting_Spot::where('user_id', auth()->id())->get();
      return view('wanted.list_shooting',compact('lists','paginate'));
    }
    function post_exhibution(){
      return view('wanted.post_exhibution');
    }
    function list_exhibution(){
      $paginate=Exibution_Center::latest()->simplePaginate(15);
      $lists=Exibution_Center::where('user_id', auth()->id())->get();
      return view('wanted.list_exhibution',compact('lists','paginate'));
    }
    function post_rooftop(){
      return view('wanted.post_rooftop');
    }
    function list_rooftop(){
      $paginate=Rooftop::latest()->simplePaginate(15);
      $lists=Rooftop::where('user_id', auth()->id())->get();
      return view('wanted.list_rooftop',compact('lists','paginate'));
    }
    function post_factory(){
      return view('wanted.post_factory');
    }
    function list_factory(){
      $paginate=Factory::latest()->simplePaginate(15);
      $lists=Factory::where('user_id', auth()->id())->get();
      return view('wanted.list_factory',compact('lists','paginate'));
    }
    function post_shop(){
      return view('wanted.post_shop');
    }
    function list_shop(){
      $paginate=Shop::latest()->simplePaginate(15);
      $lists=Shop::where('user_id', auth()->id())->get();
      return view('wanted.list_shop',compact('lists','paginate'));
    }
}
