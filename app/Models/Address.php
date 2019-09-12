<?php

namespace App\Models;

use App\Entities\City;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function asOriginRoute()
    {
        return $this->hasMany(Route::class, 'address_origin_id', 'id');
    }

    public function asDestinationRoute()
    {
        return $this->hasMany(Route::class, 'address_destination_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
