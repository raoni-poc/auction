<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Route
 *
 * @property int $id
 * @property int $address_origin_id
 * @property int $address_destination_id
 * @property int $next_route_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Address $destination
 * @property-read \App\Models\Route $nextRoute
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \App\Models\Address $origin
 * @property-read \App\Models\Route $previousRoute
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereAddressDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereAddressOriginId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereNextRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Route extends Model
{
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function origin()
    {
        return $this->belongsTo(Address::class, 'id', 'address_origin_id');
    }

    public function destination()
    {
        return $this->belongsTo(Address::class, 'id', 'address_destination_id');
    }

    public function nextRoute()
    {
        return $this->hasOne(Route::class, 'id', 'next_route_id');
    }

    public function previousRoute()
    {
        return $this->belongsTo(Route::class, 'next_route_id', 'id');
    }
}
