<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'offer_id' ,'name', 'phone', 'email', 'comment', 'reward'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function offer()
    {
        return $this->belongsTo('App\Models\Offer');
    }

    // public function images()
    // {
    //     return $this->hasMany('App\Models\OfferImage');
    // }
}
