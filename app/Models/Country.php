<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // public $table = 'contries';

    protected $fillable = [
       'country_name'
    ];

    public function offers()
    {
        return $this->belongsToMany('App\Models\Offer')->withTimestamps();;
    }
}
