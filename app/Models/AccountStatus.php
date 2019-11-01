<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class AccountStatus extends Model
{
    protected $table = 'account_status';
    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
