<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Factory extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'factory_name',
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
        'interior_condition',
        'drainage_system',
        'parking',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('factory.show', $this->id);

            return new SearchResult(
                $this,
                $this->factory_name,
                $url
            );
        }

        function Factory_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
