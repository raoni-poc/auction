<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class RoutePointType extends Model
{
    use BelongsToCompany;
    protected $table = 'route_points_types';
}
