<?php

use App\Domain\Business\Models\Business;
use App\Domain\Category\Models\Category;
use App\Domain\Listing\Models\Listing;
use App\Models\User;
use Illuminate\Testing\TestResponse;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\delete;
use function Pest\Laravel\patch;
use function Pest\Laravel\post;
use function Pest\Laravel\withoutExceptionHandling;

beforeEach(function () {
    withoutExceptionHandling();

    $this->user = User::factory()->create();
    $business = Business::factory()->create();
    $category = Category::factory()->create();
    $this->listing = Listing::factory()->create();

    $this->listingData = [
        'business_id' => $business->id,
        'category_id' => $category->id,
        'name' => 'Hotel 101',
        'description' => 'this is a nice hotel',
        'price' => 10000,
        'available' => true,

    ];

    actingAs($this->user);
});

function createListing(array $params): TestResponse
{
    return post(route('listings.store'), $params);
}

function updateListing(array $params, Listing $listing): TestResponse
{
    return patch(route('listings.update', $listing->id), $params);
}

function deleteListing(Listing $listing): TestResponse
{
    return delete(route('listings.destroy', $listing->id));
}

it('creates a listing resource via route endpoint', function () {
    $response = createListing($this->listingData);

    $response->assertStatus(302);
});

it('updates a listing resource via route endpoint', function () {
    $response = updateListing($this->listingData, $this->listing);

    $response->assertStatus(302);
});

it('deletes a listing resource via route endpoint', function () {
    $response = deleteListing($this->listing);

    $response->assertStatus(302);
});
