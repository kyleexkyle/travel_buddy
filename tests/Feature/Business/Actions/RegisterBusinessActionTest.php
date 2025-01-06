<?php

use App\Domain\Business\Actions\RegisterBusinessAction;
use App\Domain\Business\DataTransferObjects\BusinessData;
use App\Domain\Business\Models\Business;
use App\Models\User;

it('registers business as partner', function () {
    $user = User::factory()->create();

    $data = BusinessData::from([
        'name' => 'Business',
        'user_id' => $user->id,
        'email' => 'business@business.com',
        'phone' => '0912345678',
        'address' => 'business address',
    ]);

    $action = app(RegisterBusinessAction::class);

    $business = $action::execute($data, $user);

    expect($business)
        ->toBeInstanceOf(Business::class)
        ->name->toBe('Business')
        ->user->toBeInstanceOf(User::class)
        ->email->toBe('business@business.com')
        ->phone->toBe('0912345678')
        ->address->toBe('business address');
});
