<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DocumentType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document[] $documents
 * @property-read int|null $documents_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DocumentType extends Model
{
    public function documents()
    {
        return $this->hasMany(Document::class);
    }
}
