<?php

namespace App\Domain\Listing\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_id',
        'category_id',
        'name',
        'description',
        'price',
        'available',
    ];

    protected $casts = [
        'available' => 'boolean',
    ];

    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => '₱ '.number_format($value,2),
        );
    }
}
