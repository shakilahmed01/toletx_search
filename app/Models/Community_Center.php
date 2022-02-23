<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Community_Center extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_id',
        'post_type',
        'community_name',
        'address',
        'floor_level',
        'floor_size',
        'road_width',
        'utilities',
        'interior_condition',
        'fire_safety',
        'lift',
        'wifi',
        'garden',
        'cooking',
        'sitting',
        'parking',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('community.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Community_Center_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
