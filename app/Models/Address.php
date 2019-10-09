<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['city_id', 'number', 'zip_code', 'neighborhood', 'complement', 'note', 'address'];

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
