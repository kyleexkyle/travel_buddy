<?php

namespace App\Domain\Business\Actions;

use App\Domain\Business\DataTransferObjects\BusinessData;
use App\Domain\Business\Models\Business;
use App\Models\User;

class RegisterBusinessAction
{
    public static function execute(BusinessData $data, User $user): Business
    {
        $business = Business::create([
            ...$data->all(),
            'user_id' => $user->id,
        ]);

        return $business->refresh();
    }
}
