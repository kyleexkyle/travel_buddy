<?php

use App\Domain\Business\Models\Business;
use App\Models\User;
use Illuminate\Testing\TestResponse;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\patch;
use function Pest\Laravel\post;
use function Pest\Laravel\withoutExceptionHandling;

beforeEach(function () {
    $this->user = User::factory()->create();
    $this->business = Business::factory()->create();

    $this->businessData = [
        'name' => 'Business',
        'user_id' => $this->user->id,
        'email' => 'business@business.com',
        'phone' => '0912345678',
        'address' => 'business address',
    ];
});

function registerBusiness(array $params): TestResponse
{
    return post(route('businesses.store'), $params);
}

function updateBusiness(array $params, Business $business): TestResponse
{
    return patch(route('businesses.update', $business->id), $params);
}

it('registers a company resource via endpoint', function () {
    withoutExceptionHandling();

    $user = User::factory()->create();
    actingAs($user);

    $response = registerBusiness($this->businessData);

    $response->assertStatus(302);
});

it('updates a company resource via endpoint', function () {
    withoutExceptionHandling();

    $user = User::factory()->create();
    actingAs($user);

    $response = updateBusiness($this->businessData, $this->business);

    $response->assertStatus(302);
});
