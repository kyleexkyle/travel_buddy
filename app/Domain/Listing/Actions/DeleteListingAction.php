<?php

namespace App\Domain\Listing\Actions;

use App\Domain\Listing\Models\Listing;

class DeleteListingAction
{
    public static function execute(Listing $listing): bool
    {
        return $listing->delete();
    }
}
