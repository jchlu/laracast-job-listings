<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Carl',
            'last_name' => 'Sagan',
            'email' => 'test@example.com',
        ]);
        $this->call(JobListingSeeder::class);
    }
}
