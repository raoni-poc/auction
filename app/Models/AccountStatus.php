<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\AccountStatus
 *
 * @property int $id
 * @property string $status_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereStatusName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereName($value)
 */
class AccountStatus extends Model
{
    protected $table = 'account_status';
    protected $fillable = ['name'];

    public function users(){
        return $this->hasMany(User::class);
    }
    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
