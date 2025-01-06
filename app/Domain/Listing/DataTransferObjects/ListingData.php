<?php

namespace App\Domain\Listing\DataTransferObjects;

use Spatie\LaravelData\Data;

class ListingData extends Data
{
    public function __construct(
        public readonly ?int $id,
        public readonly int $business_id,
        public readonly int $category_id,
        public readonly string $name,
        public readonly string $description,
        public readonly int $price,
        public readonly bool $available
    ) {
    }
}
