<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Cargo
 *
 * @property int $id
 * @property string $cargo
 * @property string $packing
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Requirement[] $requirements
 * @property-read int|null $requirements_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo wherePacking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Cargo extends Model
{
    public function requirements()
    {
        return $this->belongsToMany(Requirement::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
