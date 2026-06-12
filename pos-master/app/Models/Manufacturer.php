<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manufacturer extends Model
{
    protected $fillable = [
        'name',
        'contact_info',
    ];

    // Um fabricante possui muitos produtos
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}