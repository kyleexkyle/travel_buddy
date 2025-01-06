<?php

namespace App\Domain\Listing\Actions;

use App\Domain\Listing\DataTransferObjects\ListingData;
use App\Domain\Listing\Models\Listing;

class CreateListingAction
{
    public static function execute(ListingData $data): Listing
    {
        $listing = Listing::create([
            ...$data->all(),
        ]);

        return $listing->refresh();
    }
}
