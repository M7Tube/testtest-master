<?php

namespace Database\Seeders;

use App\Models\Skills;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skills::Create([
            'en_name'=>'Content Marketing',
            'ar_name'=>'التسويق بالمحتوى',
            'percent'=>100,
        ]);
        Skills::Create([
            'en_name'=>'Instagram Marketing',
            'ar_name'=>'التسويق عبر الانستقرام',
            'percent'=>100,
        ]);
    }
}
