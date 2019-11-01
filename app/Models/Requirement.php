<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Requirement extends Model
{
    use BelongsToCompany;
    protected $fillable = ['name', 'requirement_type_id'];

    public function cargos()
    {
        return $this->belongsToMany(Cargo::class);
    }

    public function requirementType()
    {
        return $this->belongsTo(RequirementType::class);
    }
}
