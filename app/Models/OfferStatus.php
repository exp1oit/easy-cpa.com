<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferStatus extends Model
{
    protected $fillable = [
        'name'
    ];

    public function offer()
    {
        return $this->hasMany('App\Models\Offer');
    }
}
