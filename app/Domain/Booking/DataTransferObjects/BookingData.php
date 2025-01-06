<?php

namespace App\Domain\Booking\DataTransferObjects;

use Spatie\LaravelData\Data;

class BookingData extends Data
{
    public function __construct(
        public readonly ?int $id,
        public readonly int $listing_id,
        public readonly string $start_at,
        public readonly string $end_at,
        public ?int $total,
        public readonly string $status,
    ) {
    }
}
