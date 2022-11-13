<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::Create([
            'user_id' => 1,
            'body' => 'Masdf sadf asdf asdf s t elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula
            sed magna dictum
            porta. Quisque velit
            nisi, pretium ut lacinia in, elementum id enim. Praesent sapien massa, convallis a
            pellentesque
            nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et
            ultrices posuere
            cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet
            ligula.
            Nulla quis lorem ut libero malesuada feugiat.',
            'picture' => '5.png',
            'main_title' => 'Test sdf TEssdf',
            'title' => 'heheheh',
            'keywords' => 'test,tt,ssadf,kljaf'
        ]);
    }
}
