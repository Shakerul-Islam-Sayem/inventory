<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PDF extends Model
{
    use HasFactory;
    public function Inwarddetail(): BelongsTo{
        return $this->belongsTo(Inwarddetail::class);
    }
    public function Outwarddetail(): BelongsTo{
        return $this->belongsTo(Outwarddetail::class);
    }
}
