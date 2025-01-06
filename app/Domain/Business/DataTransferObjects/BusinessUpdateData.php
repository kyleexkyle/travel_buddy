<?php

namespace App\Domain\Business\DataTransferObjects;

use Spatie\LaravelData\Data;

class BusinessUpdateData extends Data
{
    public function __construct(
        public readonly string $name,
        public readonly string $email,
        public readonly string $phone,
        public readonly string $address,
    ) {
    }
}
