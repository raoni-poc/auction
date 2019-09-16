<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name', 'trade_name', 'account_status_id'];

    public function accountStatus()
    {
        return $this->belongsTo(AccountStatus::class);
    }
}
