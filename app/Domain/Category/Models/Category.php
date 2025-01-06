<?php

namespace App\Domain\Category\Models;

use App\Domain\Category\Enums\CategoryNameEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(string[] $array)
 */
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected $casts = [
        'name' => CategoryNameEnum::class,
    ];
}
