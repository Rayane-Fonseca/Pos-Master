<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'price',
        'quantity',
        'manufacturer_id',
        'category_id',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'quantity' => 'integer',
    ];

    // O produto pertence a um fabricante
    public function manufacturer(): BelongsTo
    {
        return $this->belongsTo(Manufacturer::class);
    }

    // O produto pertence a uma categoria
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // Se o produto for um acessório, ele se conecta aos detalhes específicos
    public function acessory(): HasOne
    {
        return $this->hasOne(Accessory::class);
    }
}