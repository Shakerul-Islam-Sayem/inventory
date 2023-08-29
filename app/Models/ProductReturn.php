<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductReturn extends Model
{
    protected $fillable = [
        'product_id',
        'comment',
        'quantity',
        'purchase_price',
        'sale_price',
        'date_received',
    ];
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
