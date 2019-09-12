<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
