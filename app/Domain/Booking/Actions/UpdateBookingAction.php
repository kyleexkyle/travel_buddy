<?php

namespace App\Domain\Booking\Actions;

use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Booking\Models\Booking;

class UpdateBookingAction
{
    public static function execute(BookingData $data, Booking $booking): Booking
    {
        $data = CalculateBookingTotalCostAction::execute($data);

        $booking->update([
            ...$data->all(),
        ]);

        return $booking->refresh();
    }
}
