<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\group;
use App\Models\student;
use App\Models\subject;
use App\Models\teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        group::factory(10)->create();
        teacher::factory(10)->create();
        subject::factory(10)->create();
        student::factory(10)->create();
    }
}
