<?php

namespace App\Domain\Business\Actions;

use App\Domain\Business\DataTransferObjects\BusinessData;
use App\Domain\Business\Models\Business;

class UpdateBusinessAction
{
    public static function execute(BusinessData $data, Business $business): Business
    {
        $business->update([
            ...$data->all(),
        ]);

        return $business->refresh();
    }
}
