<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_title',
        'product_description',
        'product_sku',
        'purchase_price',
        'sale_price',
        'category_id',
        'supplier_id',
        'product_image',
    ];
}
