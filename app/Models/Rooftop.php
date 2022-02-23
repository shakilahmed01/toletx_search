<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Rooftop extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'user_id',
        'post_type',
        'floor_area',
        'utilities',
        'protection',
        'lift',
        'interior_condition',
        'shed',
        'parking',
        'price',
        'photo',

    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('rooftop.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }

        function Rooftop_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}
