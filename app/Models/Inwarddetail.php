<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
