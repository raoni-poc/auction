<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $city_id
 * @property string $number
 * @property string $zip_code
 * @property string $neighborhood
 * @property string $complement
 * @property string $note
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Route[] $asDestinationRoute
 * @property-read int|null $as_destination_route_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Route[] $asOriginRoute
 * @property-read int|null $as_origin_route_count
 * @property-read \App\Models\City $city
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereNeighborhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereZipCode($value)
 * @mixin \Eloquent
 */
class Address extends Model
{
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
