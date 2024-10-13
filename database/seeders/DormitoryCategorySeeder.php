<?php

namespace Database\Seeders;

use App\Models\DormitoryCategory;
use Illuminate\Database\Seeder;

class DormitoryCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DormitoryCategory::factory()
            ->count(10) // Adjust the number of records as needed
            ->create();
    }
}
