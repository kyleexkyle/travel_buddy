<?php

namespace App\Domain\Business\DataTransferObjects;

use Spatie\LaravelData\Data;

class BusinessData extends Data
{
    public function __construct(
        public readonly ?int $id,
        public readonly string $name,
        public readonly string $email,
        public readonly string $phone,
        public readonly string $address,
    ) {
    }
}
