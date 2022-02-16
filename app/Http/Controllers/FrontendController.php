<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bilboard;
class FrontendController extends Controller
{
    //

    function index(){
        return view('frontend.index');
    }
    function registration(){
        return view('frontend.registration');
    }
    function single_header_added(){
        return view('frontend.single_header_added');
    }
    function header(){
        return view('frontend.header');
    }
    function footer(){
        return view('frontend.footer');
    }
    function faq(){
        return view('frontend.faq');
    }
    function report_contact_us(){
        return view('frontend.report_contact_us');
    }
    function advertise(){
        return view('frontend.advertise');
    }
    function after_login_home(){
        return view('frontend.after_login_home');
    }
    function profile(){
      $lists=Bilboard::all();
        return view('frontend.profile',compact('lists'));
    }
    function profile_info(){
        return view('frontend.profile_info');
    }
    function room(){
        return view('frontend.room');
    }
    function flat(){
        return view('frontend.flat');
    }
    function building(){
        return view('frontend.building');
    }
    function parking(){
        return view('frontend.parking');
    }
    function hotel(){
        return view('frontend.hotel');
    }
    function hostel(){
        return view('frontend.hostel');
    }
    function resort(){
        return view('frontend.resort');
    }
    function office(){
        return view('frontend.office');
    }
    function shop(){
        return view('frontend.shop');
    }
    function community_hall(){
        return view('frontend.community_hall');
    }
    function factory(){
        return view('frontend.factory');
    }
    function warehouse(){
        return view('frontend.warehouse');
    }
    function land(){
        return view('frontend.land');
    }
    function pond(){
        return view('frontend.pond');
    }
    function swimming_pool(){
        return view('frontend.swimming_pool');
    }
    function playground(){
        return view('frontend.playground');
    }
    function shooting_spot(){
        return view('frontend.shooting_spot');
    }
    function exhibition_center(){
        return view('frontend.exhibition_center');
    }
    function rooftop(){
        return view('frontend.rooftop');
    }
    function bilboard(){
        return view('frontend.bilboard');
    }
    function login_form(){
        return view('login_form');
    }
    function single_pg(){
        return view('frontend.single_pg');
    }
    function slider_section(){
        return view('frontend.slider_section');
    }
    function service_item(){
        return view('frontend.service_item');
    }
    function icon(){
        return view('frontend.icon');
    }
    function slider_section_slick(){
        return view('frontend.slider_section_slick');
    }


}
