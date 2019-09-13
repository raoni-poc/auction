<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\OfferType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OfferType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OfferType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OfferType query()
 * @mixin \Eloquent
 */
class OfferType extends Model
{
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
