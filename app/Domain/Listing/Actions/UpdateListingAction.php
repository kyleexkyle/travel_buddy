<?php

namespace App\Domain\Listing\Actions;

use App\Domain\Listing\DataTransferObjects\ListingData;
use App\Domain\Listing\Models\Listing;

class UpdateListingAction
{
    public static function execute(ListingData $data, Listing $listing): Listing
    {
        $listing->update([
            ...$data->all(),
        ]);

        return $listing->refresh();
    }
}
