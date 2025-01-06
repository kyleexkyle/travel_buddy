<?php

namespace Database\Seeders;

use App\Domain\Listing\Models\Listing;
use Illuminate\Database\Seeder;

class ListingSeeder extends Seeder
{
    public function run(): void
    {
        Listing::factory(100)->create();
    }
}
