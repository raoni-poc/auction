<?php

namespace App\Models;

use Mnabialek\LaravelEloquentFilter\Traits\Filterable;

class Country extends Model
{
    use Filterable;
    protected $fillable = ['name', 'abbreviation'];

    public function states()
    {
        return $this->hasMany(State::class);
    }
}
