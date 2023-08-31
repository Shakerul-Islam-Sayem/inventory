<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Inward extends Model
{
    use HasFactory;
    protected $fillable = [
        'inward_id',
        'supplier_id',
        'date_received',
        'payment_method',
        'trxid',
        'discount',
        'comment',
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('purchase_price', 'sale_price', 'quantity');
    }
    public function inwards()
    {
        return $this->belongsToMany(Inward::class)->withPivot('purchase_price', 'sale_price', 'quantity');
    }
    public function inwarddetails(): HasMany
    {
        return $this->hasMany(Inwarddetail::class);
    }
    public function inward(): BelongsTo
    {
        return $this->belongsTo(Inward::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

