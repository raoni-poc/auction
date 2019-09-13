<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\AccountStatus
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus query()
 * @mixin \Eloquent
 */
class AccountStatus extends Model
{
    public function users(){
        return $this->hasMany(User::class);
    }
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
