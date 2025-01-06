<?php

use App\Domain\Business\Models\Business;
use App\Domain\Category\Models\Category;
use App\Domain\Listing\Actions\UpdateListingAction;
use App\Domain\Listing\DataTransferObjects\ListingData;
use App\Domain\Listing\Models\Listing;

beforeEach(function () {
    $this->business = Business::factory()->create();
    $this->category = Category::factory()->create();
    $this->listing = Listing::factory()->create();
});

it('updates a listing resource', function () {
    $listing = Listing::factory()->create();

    $data = ListingData::from([
        'business_id' => $this->business->id,
        'category_id' => $this->category->id,
        'name' => 'Hotel 101',
        'description' => 'this is a nice hotel',
        'price' => 10000,
        'available' => true,
    ]);

    $action = app(UpdateListingAction::class);

    $listing = $action::execute($data, $listing);

    expect($listing)
        ->toBeInstanceOf(Listing::class)
        ->name->toBe('Hotel 101');
});
