<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::Create([
            'ar_name' => 'تجربة',
            'en_name' => 'test',
            'ar_desc' => 'وصف تجربة شيبشسبشسيب  ثصبسشيب ثشص  شسيب شصث شسيب',
            'en_desc' => 'fgsfdgdsfgdsfgkfjg;lkfg',
            'picture' => '1.png',
            'buy_link' => 'test',
            'ar_buy_link_title_text' => 'تيست',
            'en_buy_link_title_text' => 'test',
            'buy_link_text' => 'buy',
            'free_item_with_email_send' => 0,
            'email_text' => null,
            'email_file' => null,
            'price' => 555,
            'user_id' => 1,
        ]);
        Item::Create([
            'ar_name' => 'تجربة',
            'en_name' => 'test',
            'ar_desc' => 'وصف تجربة شيبشسبشسيب  ثصبسشيب ثشص  شسيب شصث شسيب',
            'en_desc' => 'fgsfdgdsfgdsfgkfjg;lkfg',
            'picture' => '3.png',
            'buy_link' => 'test',
            'ar_buy_link_title_text' => 'تيست',
            'en_buy_link_title_text' => 'test',
            'buy_link_text' => 'buy',
            'free_item_with_email_send' => 1,
            'email_text' => 'fsda',
            'email_file' => 'fdsa',
            'price' => 555,
            'user_id' => 1,
        ]);
    }
}
