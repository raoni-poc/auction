<?php

namespace App\Models;

use App\Traits\TableName;
use Illuminate\Database\Eloquent\Model as EloquentModel;

class Model extends EloquentModel
{
    use TableName;
}
