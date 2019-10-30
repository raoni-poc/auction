<?php

namespace App\Models;

class DocumentType extends Model
{
    protected $fillable = ['name'];

    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
