<?php

namespace App\Models;

class Document extends Model
{
    protected $fillable = ['document_type_id', 'content', 'file', 'expiration_date'];

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
