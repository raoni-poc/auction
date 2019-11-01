<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Route extends Model
{
    use BelongsToCompany;
    protected $fillable = ['address_origin_id', 'address_destination_id', 'next_route_id'];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function origin()
    {
        return $this->belongsTo(Address::class, 'address_origin_id', 'id');
    }

    public function destination()
    {
        return $this->belongsTo(Address::class, 'address_destination_id', 'id');
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
