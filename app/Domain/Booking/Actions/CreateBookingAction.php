<?php

namespace App\Domain\Booking\Actions;

use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Booking\Models\Booking;
use App\Models\User;

class CreateBookingAction
{
    public static function execute(BookingData $data, User $user): Booking
    {
        $data = CalculateBookingTotalCostAction::execute($data);

        $booking = Booking::create([
            ...$data->all(),
            'user_id' => $user->id,
        ]);

        return $booking->refresh();
    }
}
