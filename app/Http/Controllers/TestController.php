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
            ->registerModel(Hostel::class, 'hostel_name')
            ->registerModel(Hotel::class, 'hotel_name')
            ->registerModel(Bilboard::class, 'address')
            ->registerModel(Community_Center::class, 'community_name')
            ->registerModel(Exibution_Center::class, 'exibution_center_name')
            ->registerModel(Factory::class, 'exibution_center_name')
            ->registerModel(Flat::class, 'address')
            ->registerModel(Land::class, 'address')
            ->registerModel(Office::class, 'address')
            ->registerModel(Parking_Spot::class, 'address')
            ->registerModel(Play_ground::class, 'address')
            ->registerModel(Pond::class, 'address')
            ->registerModel(Restaurant::class, 'resort_name')
            ->registerModel(Rooftop::class, 'address')
            ->registerModel(Room::class, 'hotel_name')
            ->registerModel(Shooting_Spot::class, 'shooting_name')
            ->registerModel(Shop::class, 'address')
            ->registerModel(Swimming_Pool::class, 'type')
            ->registerModel(Warehouse::class, 'address')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }

}
