<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Bid extends Model
{
    use BelongsToCompany;

    protected $fillable = ['value', 'offer_id'];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
