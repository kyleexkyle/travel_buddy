<?php

use App\Domain\Booking\Actions\CreateBookingAction;
use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Booking\Enums\BookingStatusEnum;
use App\Domain\Booking\Models\Booking;
use App\Domain\Listing\Models\Listing;
use App\Models\User;
use Illuminate\Support\Carbon;

it('creates a booking resource', function () {
    $user = User::factory()->create();
    $listing = Listing::factory()->create();

    $data = BookingData::from([
        'user_id' => $user->id,
        'listing_id' => $listing->id,
        'start_at' => '2019-01-01 01:00:00',
        'end_at' => '2019-01-02 02:00:00',
        'total' => 0,
        'status' => 'pending',
    ]);

    $action = app(CreateBookingAction::class);

    $booking = $action::execute($data, $user);

    expect($booking)
        ->toBeInstanceOf(Booking::class)
        ->user->toBeInstanceOf(User::class)
        ->listing->toBeInstanceOf(Listing::class)
        ->start_at->toBeInstanceOf(Carbon::class)
        ->end_at->toBeInstanceOf(Carbon::class)
        ->total->toBe(1000)
        ->status->toBe(BookingStatusEnum::pending);
});
