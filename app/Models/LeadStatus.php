<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadStatus extends Model
{
    
    public function leads()
    {
        return $this->hasMany('App\Models\Lead');
    }
}
