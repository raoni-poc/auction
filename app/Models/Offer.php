<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Offer extends Model
{
    use BelongsToCompany;

    protected $fillable = ['route_id', 'cargo_id', 'offer_type_id', 'start_price', 'description'];

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
