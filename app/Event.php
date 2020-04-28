<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function venue(){
        return $this->belongsToMany(Venue::class);
    }
}
