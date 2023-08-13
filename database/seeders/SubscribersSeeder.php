<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subscribers;

class SubscribersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Subscribers::factory()->count(10)->create();
    }
}
