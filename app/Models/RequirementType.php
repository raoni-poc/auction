<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequirementType extends Model
{
    protected $table = 'requirements_types';
    protected $fillable = ['name'];

    public function requirement()
    {
        return $this->hasMany(Requirement::class);
    }
}
