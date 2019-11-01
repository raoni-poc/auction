<?php

namespace App\Models;

use App\Traits\BelongsToCompany;

class Document extends Model
{
    use BelongsToCompany;

    protected $fillable = ['document_type_id', 'content', 'file', 'expiration_date'];

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
