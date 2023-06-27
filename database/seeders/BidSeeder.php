<?php

namespace Database\Seeders;

use App\Models\Bid;
use App\Models\LineItem;
use Illuminate\Database\Seeder;

class BidSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bid::factory()
            ->count(5)
            ->has(LineItem::factory()->count(100))
            ->create();
    }
}
