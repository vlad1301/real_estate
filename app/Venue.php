<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function location(){
        return $this->belongsTo(Location::class);
    }

    public function event(){
        return $this->belongsToMany(Event::class);
}
}
