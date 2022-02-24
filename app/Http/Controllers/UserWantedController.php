<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Auth;
use App\Models\Bilboard;
use App\Models\Room;
use App\Models\User;
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
    function post_hotel(){
      return view('wanted.post_hotel');
    }
    function post_flat(){
      return view('wanted.post_flat');
    }
    function post_resort(){
      return view('wanted.post_resort');
    }
    function post_parking_spot(){
      return view('wanted.post_parking_spot');
    }
    function post_office(){
      return view('wanted.post_office');
    }
    function post_community(){
      return view('wanted.post_community');
    }
    function post_warehouse(){
      return view('wanted.post_warehouse');
    }
    function post_land(){
      return view('wanted.post_land');
    }
    function post_pond(){
      return view('wanted.post_pond');
    }
    function post_swimmingpool(){
      return view('wanted.post_swimmingpool');
    }
    function post_playground(){
      return view('wanted.post_playground');
    }
    function post_shooting(){
      return view('wanted.post_shooting');
    }
    function post_exhibution(){
      return view('wanted.post_exhibution');
    }
    function post_rooftop(){
      return view('wanted.post_rooftop');
    }
    function post_factory(){
      return view('wanted.post_factory');
    }
    function post_shop(){
      return view('wanted.post_shop');
    }
}
