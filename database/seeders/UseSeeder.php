<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create()->count(100);
    }
}
