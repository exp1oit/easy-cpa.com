<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadImage extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'offer_id', 'path'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
    
    public function lead()
    {
        return $this->belongsTo('App\Models\Lead');
    }
}
