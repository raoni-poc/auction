<?php

namespace App\Models;

class Cargo extends Model
{
    protected $fillable = ['cargo', 'packing', 'description'];

    public function requirements()
    {
        return $this->belongsToMany(Requirement::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
