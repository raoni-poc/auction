<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
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
