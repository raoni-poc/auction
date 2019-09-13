<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Offer
 *
 * @property int $id
 * @property int $route_id
 * @property int $cargo_id
 * @property int $offer_type_id
 * @property float $start_price
 * @property float $first_positive_price
 * @property float $current_price
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $bids
 * @property-read int|null $bids_count
 * @property-read \App\Models\Cargo $cargo
 * @property-read \App\Models\OfferType $offerType
 * @property-read \App\Models\Route $route
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereCargoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereCurrentPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereFirstPositivePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereOfferTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereStartPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
