<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Addon extends Model
{
    use HasFactory;

    protected $table = 'addons';
    protected $fillable = [
        'name_addOn',
        'price_addOn',
        'stock_addOn',
        'categories_id'
    ];

    public function categories(): BelongsTo
    {
        return $this->belongsTo(categories::class);
    }

    public function orderDetails(): BelongsTo
    {
        return $this->belongsTo(orderDetails::class);
    }
}
