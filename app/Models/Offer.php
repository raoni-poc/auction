<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function route()
    {
        return $this->belongsTo(Route::class);
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function offerType()
    {
        return $this->belongsTo(OfferType::class);
    }

    public function bids()
    {
        return $this->hasMany(Offer::class);
    }
}
