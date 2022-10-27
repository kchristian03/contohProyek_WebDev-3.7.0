<?php

namespace Database\Seeders;

use App\Models\Members;
use Database\Factories\MembersFactory;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    public function run()
    {
        for ($index = 0; $index <= 19; $index++){
            Members::factory()->create([]);
        }
    }
}
