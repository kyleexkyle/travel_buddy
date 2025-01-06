<?php

namespace App\Http\Web\Controllers\Business;

use App\Domain\Business\Actions\RegisterBusinessAction;
use App\Domain\Business\Actions\UpdateBusinessAction;
use App\Domain\Business\DataTransferObjects\BusinessData;
use App\Domain\Business\Models\Business;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class BusinessController extends Controller
{
    public function store(BusinessData $data, RegisterBusinessAction $action): RedirectResponse
    {
        $action::execute(
            data: $data,
            user: request()->user()
        );

        return redirect()->back()->with('success', 'Business added successfully!');
    }

    public function update(BusinessData $data, Business $business, UpdateBusinessAction $action): RedirectResponse
    {
        $action::execute(
            data: $data,
            business: $business,
        );

        return redirect()->back()->with('success', 'Business updated successfully!');
    }
}
