<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        'notes',
    ];

}
