<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\AppSettings;
use App\Models\Item;
use App\Models\Post;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Statistics;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        $items = Item::latest('item_id')->take(6)->get(['item_id', 'ar_name', 'en_name', 'picture', 'created_at']);
        $services = Services::latest('service_id')->take(6)->get(['service_id', 'en_name', 'ar_name', 'en_desc', 'ar_desc', 'icon']);
        $posts = Post::latest('post_id')->with(['user' => function ($query) {
            return $query->select('user_id', 'name');
        }])->take(6)->get();
        $statistics = Statistics::first();
        $skills = Skills::latest('skill_id')->get();
        $info = AppSettings::first();
        return view('pages.HomePage.homepage', compact('info', 'services', 'posts', 'items', 'statistics', 'skills'));
    }
}
