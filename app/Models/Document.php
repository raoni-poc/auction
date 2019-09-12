<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }
}
