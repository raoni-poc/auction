<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ['value', 'offer_id'];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
