<?php

use App\Domain\Booking\Actions\DeleteBookingAction;
use App\Domain\Booking\Models\Booking;

it('destroys a booking resource', function () {
    $booking = Booking::factory()->create();

    $action = app(DeleteBookingAction::class);

    $booking = $action::execute($booking);

    expect($booking)
        ->toBeTrue();
});
