<?php

namespace App\Models;

class OfferType extends Model
{
    protected $table = 'offers_types';
    protected $fillable = ['name'];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
