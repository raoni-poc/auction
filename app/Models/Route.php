<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function origin()
    {
        return $this->belongsTo(Address::class, 'id', 'address_origin_id');
    }

    public function destination()
    {
        return $this->belongsTo(Address::class, 'id', 'address_destination_id');
    }

    public function nextRoute()
    {
        return $this->hasOne(Route::class, 'id', 'next_route_id');
    }

    public function previousRoute()
    {
        return $this->belongsTo(Route::class, 'next_route_id', 'id');
    }
}
