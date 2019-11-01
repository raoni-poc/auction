<?php

namespace App\Models;

class CompanyGroup extends Model
{
    public function companies()
    {
        return $this->belongsToMany(Company::class);
    }
}
