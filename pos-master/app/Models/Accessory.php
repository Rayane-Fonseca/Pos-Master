<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Accessory extends Model
{
    protected $fillable = [
        'product_id',
        'compatibility',
        'color',
        'material',
        'has_extended_warranty',
    ];

    protected $casts = [
        'has_extended_warranty' => 'boolean',
    ];

    // O acessório pertence a um produto base
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}