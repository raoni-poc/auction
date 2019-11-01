<?php

namespace App\Traits;

use App\Models\Company;

trait BelongsToCompany
{
    public function companyOwner()
    {
        return $this->belongsTo(Company::class, 'company_owner_id', 'id');
    }
}
