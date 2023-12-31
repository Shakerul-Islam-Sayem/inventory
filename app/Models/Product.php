<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
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
        'quantity',
        'product_image',
    ];
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
    public function stock(): BelongsTo
    {
        return $this->belongsTo(stock::class);
    }
    public function inwarddetail()
    {
        return $this->hasMany(Inwarddetail::class);
    }
    public function inward()
    {
        return $this->hasMany(Inward::class);
    }
    public function productreturn()
    {
        return $this->hasMany(productreturn::class);
    }
}
