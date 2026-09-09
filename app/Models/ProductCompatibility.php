<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductCompatibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'machine_id',
        'spare_part_id',
        'notes',
    ];

    public function machine(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'machine_id');
    }

    public function sparePart(): BelongsTo
    {
        return $this->belongsTo(Product::class, 'spare_part_id');
    }
}
