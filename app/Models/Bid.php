<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Bid
 *
 * @property int $id
 * @property float $value
 * @property int $offer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer $offer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereValue($value)
 * @mixin \Eloquent
 */
class Bid extends Model
{
    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
