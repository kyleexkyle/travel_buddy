<?php

namespace Database\Factories\Domain\Category\Models;

use App\Domain\Category\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => 'hotel',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
