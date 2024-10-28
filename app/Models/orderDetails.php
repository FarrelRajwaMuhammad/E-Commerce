<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class orderDetails extends Model
{
    use HasFactory;

    public function orders(): HasMany
    {
        return $this->hasMany(orders::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(products::class);
    }

    public function addon(): HasMany
    {
        return $this->hasMany(addon::class);
    }
}
