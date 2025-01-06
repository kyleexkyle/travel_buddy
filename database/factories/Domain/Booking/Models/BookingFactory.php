<?php

namespace Database\Factories\Domain\Booking\Models;

use App\Domain\Booking\Models\Booking;
use App\Domain\Listing\Models\Listing;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'listing_id' => Listing::factory(),
            'start_at' => Carbon::parse('2019-01-01 01:00:00'),
            'end_at' => Carbon::parse('2019-01-02 01:00:00'),
            'total' => 1000,
            'status' => 'pending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
