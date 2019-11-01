<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Role extends Model
{
    use BelongsToCompany;
    protected $fillable = ['name', 'guard_name'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
