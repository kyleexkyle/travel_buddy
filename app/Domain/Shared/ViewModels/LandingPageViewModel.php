<?php

namespace App\Domain\Shared\ViewModels;

use App\Domain\Listing\Models\Listing;
use App\Http\Web\Resources\Listing\ListingCollection;
use Spatie\ViewModels\ViewModel;

class LandingPageViewModel extends ViewModel
{
    public function __construct(){}

    public function hotels(): ListingCollection
    {
        $hotels = Listing::query()
            ->where('category_id', 1)
            ->limit(4)
            ->get();

        return new ListingCollection($hotels);
    }

    public function cars(): ListingCollection
    {
        $car  = Listing::query()
            ->where('category_id', 2)
            ->limit(4)
            ->get();

        return new ListingCollection($car);
    }

    public function scooters(): ListingCollection
    {
        $scooter = Listing::query()
            ->where('category_id', 3)
            ->limit(4)
            ->get();

        return new ListingCollection($scooter);
    }
}
