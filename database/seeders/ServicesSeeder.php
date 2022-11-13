<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Services::Create([
            'en_name' => 'test',
            'ar_name' => 'تجربة',
            'en_desc' => 'dfsaasdf',
            'ar_desc' => 'شيسبيشسبشسيب',
            'icon' => '1.png',
            'btn_text' => 'Test Action',
            'btn_link' => 'https://www.google.com/',
        ]);
    }
}
