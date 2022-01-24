<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Hotel extends Model implements Searchable

{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'hotel_name',
        'location',
        'wifi',
        'bathroom',
        'cctv',
        'lift',
        'furnished',
        'security',
        'parking',
        'price',
        'guest_count',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('hotel.show', $this->id);

            return new SearchResult(
                $this,
                $this->hotel_name,
                $url
            );
        }
}
