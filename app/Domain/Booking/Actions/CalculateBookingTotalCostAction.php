<?php

namespace App\Domain\Booking\Actions;

use App\Domain\Booking\DataTransferObjects\BookingData;
use App\Domain\Listing\Models\Listing;
use Spatie\Period\Period;
use Spatie\Period\Precision;

class CalculateBookingTotalCostAction
{
    public static function execute(BookingData $data): BookingData
    {
        $listing = Listing::findOrFail($data->listing_id);
        $period = Period::make(
            start: $data->start_at,
            end: $data->end_at,
            precision: Precision::DAY(),
        );

        $days = $period->end()->diff($period->start())->days;

        $data->total = $listing->price * $days;

        return $data;
    }
}
