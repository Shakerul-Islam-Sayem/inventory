<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inwarddetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_id',
        'date_received',
        'payment',
        'trxid',
        'dicount',
        'comment',
    ];

    public function inward(): BelongsTo
    {
        return $this->belongsTo(Inward::class);
    }
}
