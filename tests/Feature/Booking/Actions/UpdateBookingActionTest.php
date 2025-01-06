<?php

use App\Domain\Booking\Actions\UpdateBookingAction;
use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Booking\Models\Booking;
use App\Domain\Listing\Models\Listing;
use App\Models\User;

it('updates a booking resource', function () {
    $booking = Booking::factory()->create();
    $user = User::first();
    $listing = Listing::first();

    $data = BookingData::from([
        'user_id' => $user->id,
        'listing_id' => $listing->id,
        'start_at' => '2019-01-01 01:00:00',
        'end_at' => '2019-01-03 02:00:00',
        'total' => 0,
        'status' => 'pending',
    ]);

    $action = app(UpdateBookingAction::class);

    $booking = $action::execute($data, $booking);

    expect($booking)
        ->toBeInstanceOf(Booking::class)
        ->total->toBe(2000);
});
