<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class logiciel extends Model
{
    use HasFactory;
    protected $table = 'logiciel';

    protected $fillable = [
        'nom',
        'editeur',
        'datesortie',
        'categorie_id',
        'last_used_at',
        'version',
        'soft_type_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, "categorie_id");
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(types::class, "soft_type_id");
    }

}
