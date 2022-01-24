<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Land extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'land_area',
        'vegetations',
        'road_width',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('land.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }
}
