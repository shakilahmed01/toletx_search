<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Restaurant extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
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
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('restaurant.show', $this->id);

            return new SearchResult(
                $this,
                $this->resort_name,
                $url
            );
        }
}
