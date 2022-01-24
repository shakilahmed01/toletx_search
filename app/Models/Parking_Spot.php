<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Parking_Spot extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'address',
        'price',
        'floor_level',
        'floor_height',
        'vehicle_type',
        'description',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('parking.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }
}
