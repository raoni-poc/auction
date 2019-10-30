<?php

namespace App\Models;

use Mnabialek\LaravelEloquentFilter\Traits\Filterable;

class City extends Model
{
    use Filterable;
    protected $fillable = ['ibge_code', 'name', 'state_id'];
    protected $table = 'cities';

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
