<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserWantedController extends Controller
{
    //
    function post_bilboard(){
      return view('wanted.post_bilboard');
    }
}
