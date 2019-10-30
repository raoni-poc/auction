<?php

namespace App\Models;

class RequirementType extends Model
{
    protected $table = 'requirements_types';
    protected $fillable = ['name'];

    public function requirement()
    {
        return $this->hasMany(Requirement::class);
    }
}
