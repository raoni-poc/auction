<?php

namespace App\Models;

class Company extends Model
{
    protected $fillable = ['name', 'trade_name', 'account_status_id'];

    public function accountStatus()
    {
        return $this->belongsTo(AccountStatus::class);
    }
}
