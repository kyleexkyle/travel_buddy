<?php

use App\Domain\Business\Models\Business;
use App\Domain\Category\Models\Category;
use App\Domain\Listing\Actions\CreateListingAction;
use App\Domain\Listing\DataTransferObjects\ListingData;
use App\Domain\Listing\Models\Listing;

it('creates a new listing', function () {
    $business = Business::factory()->create();
    $category = Category::factory()->create();

    $data = ListingData::from([
        'business_id' => $business->id,
        'category_id' => $category->id,
        'name' => 'Hotel 101',
        'description' => 'this is a nice hotel',
        'price' => 10000,
        'available' => true,
    ]);

    $action = app(CreateListingAction::class);

    $listing = $action::execute($data);

    expect($listing)
        ->toBeInstanceOf(Listing::class);
});
