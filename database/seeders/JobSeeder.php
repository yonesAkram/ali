<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(103)->create();

        // DB::table('job_listings')->insert([
        //     [
        //         'id' => 1,
        //         'title' => 'Frontend Developer',
        //         'salary' => '$50,000',
        //         'location' => 'New York, NY',
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'Backend Developer',
        //         'salary' => '$78,000',
        //         'location' => 'San Francisco, CA',
        //     ],
        //     [
        //         'id' => 3,
        //         'title' => 'Full Stack Developer',
        //         'salary' => '$95,300',
        //         'location' => 'Remote',
        //     ],
        // ]);
    }
}
