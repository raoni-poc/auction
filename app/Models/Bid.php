<?php

namespace App\Models;

class Bid extends Model
{
    protected $fillable = ['value', 'offer_id'];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
