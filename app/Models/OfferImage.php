<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfferImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'path', 'offer_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function offer()
    {
        return $this->belongsTo('App\Models\Offer');
    }
}
