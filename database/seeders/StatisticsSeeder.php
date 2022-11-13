<?php

namespace Database\Seeders;

use App\Models\Statistics;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Statistics::Create([
            'work_complated' => 87,
            'years_of_experience' => 4,
            'total_clients' => 34,
            'award_won' => 11,
        ]);
    }
}
