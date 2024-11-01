<?php

namespace Database\Seeders;

use App\Models\Employer;
use App\Models\Job;
use App\Models\JobTag;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class JobListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employer::factory(20)->create();
        Job::factory(200)->create();
        Tag::factory(20)->create();
        JobTag::factory(200)->create();
    }
}
