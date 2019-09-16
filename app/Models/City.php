<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
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
