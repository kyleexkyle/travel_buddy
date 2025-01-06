<?php

namespace App\Domain\Booking\Actions;

use App\Domain\Booking\Models\Booking;

class DeleteBookingAction
{
    public static function execute(Booking $booking): bool
    {
        return $booking->delete();
    }
}
