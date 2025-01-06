<?php

use App\Domain\Booking\Models\Booking;
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

    $this->booking = Booking::factory()->create();
    $this->user = User::first();
    $this->listing = Listing::first();

    $this->bookingData = [
        'user_id' => $this->user->id,
        'listing_id' => $this->listing->id,
        'start_at' => '2019-01-01 01:00:00',
        'end_at' => '2019-01-02 02:00:00',
        'total' => 0,
        'status' => 'pending',
    ];

    actingAs($this->user);
});

function createBooking(array $params): TestResponse
{
    return post(route('bookings.store'), $params);
}

function updateBooking(array $params, Booking $booking): TestResponse
{
    return patch(route('bookings.update', $booking->id), $params);
}

function deleteBooking(Booking $booking): TestResponse
{
    return delete(route('bookings.destroy', $booking->id));
}

it('creates a booking resource via route endpoint', function () {
    $response = createBooking($this->bookingData);

    $response->assertStatus(302);
});

it('updates a booking resource via route endpoint', function () {
    $response = updateBooking($this->bookingData, $this->booking);

    $response->assertStatus(302);
});

it('deletes a booking resource via route endpoint', function () {
    $response = deleteBooking($this->booking);

    $response->assertStatus(302);
});
