<?php

namespace App\Http\Web\Controllers\Listing;

use App\Domain\Listing\Actions\CreateListingAction;
use App\Domain\Listing\Actions\DeleteListingAction;
use App\Domain\Listing\Actions\UpdateListingAction;
use App\Domain\Listing\DataTransferObjects\ListingData;
use App\Domain\Listing\Models\Listing;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;

class ListingController extends Controller
{
    public function store(ListingData $data, CreateListingAction $action): RedirectResponse
    {
        $action::execute($data);

        return redirect()->back()->with('success', 'Listing has been created!');
    }

    public function update(ListingData $data, Listing $listing, UpdateListingAction $action): RedirectResponse
    {
        $action::execute($data, $listing);

        return redirect()->back()->with('success', 'Listing has been updated!');
    }

    public function destroy(Listing $listing, DeleteListingAction $action): RedirectResponse
    {
        $action::execute($listing);

        return redirect()->back()->with('success', 'Listing has been deleted!');
    }
}
