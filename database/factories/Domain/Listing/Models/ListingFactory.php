<?php

namespace Database\Factories\Domain\Listing\Models;

use App\Domain\Business\Models\Business;
use App\Domain\Listing\Models\Listing;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ListingFactory extends Factory
{
    protected $model = Listing::class;

    public function definition(): array
    {
        return [
            'business_id' => rand(1,5),
            'category_id' => rand(1,3),
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => rand(500,5000),
            'available' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
