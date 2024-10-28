<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'price',
        'stock',
        'image',
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
