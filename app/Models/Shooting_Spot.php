<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Shooting_Spot extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'shooting_name',
        'user_id',
        'post_type',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'building_condition',
        'fire_safety',
        'lift',
        'wifi',
        'garden',
        'cooking',
        'sitting',
        'parking',
        'vegetations',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('shooting.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Shooting_Spot_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
