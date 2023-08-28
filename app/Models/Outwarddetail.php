<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Outwarddetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'outward_id',
        'product_id',
        'quantity',
        'purchase_price',
        'sale_price',
    ];
    public function outward(): BelongsTo
    {
        return $this->belongsTo(Outward::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function PDF(): HasMany
    {
        return $this->hasMany(PDF::class);
    }
}
