<?php

use App\Domain\Business\Actions\UpdateBusinessAction;
use App\Domain\Business\DataTransferObjects\BusinessData;
use App\Domain\Business\Models\Business;

it('updates a business resource', function () {
    $business = Business::factory()->create();

    $data = BusinessData::from([
        'name' => 'updated',
        'email' => 'business@business.com',
        'phone' => '0912345678',
        'address' => 'business address',
    ]);

    $action = app(UpdateBusinessAction::class);

    $business = $action::execute($data, $business);

    expect($business)
        ->toBeInstanceOf(Business::class)
        ->name->toBe('updated');
});
