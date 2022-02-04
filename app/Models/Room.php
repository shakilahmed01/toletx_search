<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Room extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'hotel_name',
        'address',
        'room_size',
        'attached_toilet',
        'utilities',
        'attached_varanda',
        'hot_water',
        'laundry',
        'ac',
        'cable_tv',
        'wifi',
        'lift',
        'furnished',
        'parking',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('room.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }
}
