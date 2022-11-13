<?php

namespace App\Http\Livewire\Post;

use App\Models\AppSettings;
use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{

    public function render()
    {
        $post = ModelsPost::where('post_id', request('id'))->first();
        if ($post) {
            return view('livewire.post.post', [
                'post' => $post,
            ]);
        } else {
            abort(404);
        }
    }
}
