<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\RequirementType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Requirement[] $requirement
 * @property-read int|null $requirement_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType query()
 * @mixin \Eloquent
 */
class RequirementType extends Model
{
    public function requirement()
    {
        return $this->hasMany(Requirement::class);
    }
}
