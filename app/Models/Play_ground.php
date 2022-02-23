<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Play_ground extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'user_id',
        'post_type',
        'type',
        'utilities',
        'attached_toilet',
        'laundry',
        'change_room',
        'wifi',
        'furnished',
        'ac',
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
            $url = route('playground.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Play_ground_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
