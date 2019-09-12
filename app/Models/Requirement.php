<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }

    public function requirementType()
    {
        return $this->belongsTo(RequirementType::class);
    }
}
