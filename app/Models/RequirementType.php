<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequirementType extends Model
{
    public function requirement()
    {
        return $this->hasMany(Requirement::class);
    }
}
