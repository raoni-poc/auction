<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Requirement
 *
 * @property int $id
 * @property string $requirement
 * @property int $requirement_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cargo[] $cargos
 * @property-read int|null $cargos_count
 * @property-read \App\Models\RequirementType $requirementType
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereRequirementTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
