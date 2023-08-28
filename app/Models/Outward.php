<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Outward extends Model
{
    use HasFactory;
    protected $fillable = [
        'outward_id',
        'customer_name',
        'customer_phone',
        'discount',
        'payment_method',
        'trxid',
        'comment',
        'date_received',
    ];
    public function outwarddetails(): HasMany
    {
        return $this->hasMany(Outwarddetail::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
