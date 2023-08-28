<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stock extends Model
{
    use HasFactory;
    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }
    public function suppliers(): HasMany
    {
        return $this->hasMany(supplier::class);
    }
}
