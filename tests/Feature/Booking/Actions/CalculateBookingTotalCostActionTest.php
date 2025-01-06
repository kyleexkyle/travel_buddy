<?php

use App\Domain\Booking\Actions\CalculateBookingTotalCostAction;
use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Listing\Models\Listing;
use App\Models\User;

it('calculates booking total cost', function () {
    $user = User::factory()->create();
    $listing = Listing::factory()->create();

    $data = BookingData::from([
        'user_id' => $user->id,
        'listing_id' => $listing->id,
        'start_at' => '2019-01-01 01:00:00',
        'end_at' => '2019-01-03 02:00:00',
        'status' => 'pending',
    ]);

    $action = app(CalculateBookingTotalCostAction::class);

    $data = $action::execute($data);

    expect($data)
        ->toBeInstanceOf(BookingData::class)
        ->total->toBe(2000);
});
