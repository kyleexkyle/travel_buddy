<?php

namespace Database\Seeders;

use App\Domain\Category\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'hotel']);
        Category::create(['name' => 'car']);
        Category::create(['name' => 'motorcycle']);
    }
}
