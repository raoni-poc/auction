<?php

namespace App\Models;

class Role extends Model
{
    protected $fillable = ['name', 'guard_name'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}
