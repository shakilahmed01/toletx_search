<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Bilboard extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [

        'user_id',
        'address',
        'type',
        'size',
        'hieght',
        'electricity',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('bilboard.show', $this->id);

            return new SearchResult(
                $this,
                $this->address,
                $url
            );
        }
    function BilboardrelationBetweenUser()
          {
          return $this->hasOne('App\Models\User','id','user_id');
          }
}
