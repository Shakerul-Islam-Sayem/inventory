<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inwarddetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'inward_id',
        'product_id',
        'quantity',
        'purchase_price',
        'sale_price',
    ];

    public function inward(): BelongsTo
    {
        return $this->belongsTo(Inward::class);
    }
    public function inwarddetails(): HasMany
    {
        return $this->hasMany(Inwarddetail::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function PDF(): HasMany
    {
        return $this->hasMany(PDF::class);
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
