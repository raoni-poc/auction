<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function address()
    {
        return $this->hasMany(Address::class);
    }
}
