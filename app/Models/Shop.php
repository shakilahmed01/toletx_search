<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Shop extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'user_id',
        'post_type',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'building_condition',
        'fire_safety',
        'lift',
        'interior_condition',
        'parking',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('shop.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Shop_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
