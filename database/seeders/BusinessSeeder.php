<?php

namespace Database\Seeders;

use App\Domain\Business\Models\Business;
use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
{
    public function run(): void
    {
        Business::factory(5)->create();
    }
}
