<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class orders extends Model
{
    use HasFactory;

    public function customers(): BelongsTo
    {
        return $this->belongsTo(customers::class);
    }

    public function orderDetails(): BelongsTo
    {
        return $this->belongsTo(orderDetails::class);
    }
}
