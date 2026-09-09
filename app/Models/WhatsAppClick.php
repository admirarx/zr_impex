<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WhatsAppClick extends Model
{
    use HasFactory;

    protected $table = 'whatsapp_clicks';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'source_page',
        'ip_hash',
        'user_agent',
        'device_type',
        'clicked_at',
    ];

    protected function casts(): array
    {
        return [
            'clicked_at' => 'datetime',
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
