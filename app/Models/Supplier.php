<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier_title',
        'owner_name',
        'contact_person',
        'email',
        'phone',
        'address',
        'tax',
        'bin_number',
        'status',
        'notes',
    ];
    public function products(): HasMany
    {
        return $this->hasMany(Products::class);
    }
    public function inwarddetails(): HasMany
    {
        return $this->hasMany(inwarddetail::class);
    }
    public function stock(): BelongsTo
    {
        return $this->belongsTo(stock::class);
    }
}

