<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Permission extends Model
{
    protected $fillable = ['name', 'guard_name'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
