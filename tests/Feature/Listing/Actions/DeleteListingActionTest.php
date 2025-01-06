<?php

use App\Domain\Listing\Actions\DeleteListingAction;
use App\Domain\Listing\Models\Listing;

it('destroys a listing resource', function () {
    $listing = Listing::factory()->create();

    $action = app(DeleteListingAction::class);

    $listing = $action::execute($listing);

    expect($listing)
        ->toBeTrue();
});
