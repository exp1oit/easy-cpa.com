<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'rating', 'description', 'promo', 'condition'
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

    public function images()
    {
        return $this->hasMany('App\Models\OfferImage');
    }

    public function leads()
    {
        return $this->hasMany('App\Models\Lead');
    }

    public function rewards()
    {
        return $this->hasMany('App\Models\Reward');
    }
}
