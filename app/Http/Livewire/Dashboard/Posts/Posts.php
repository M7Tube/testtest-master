<?php

namespace App\Http\Livewire\Dashboard\Posts;

use App\Http\Traits\LivewireDashboardTrait;
use Livewire\WithPagination as LivewireWithPagination;
use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $post_id;
    public $main_title;
    public $title;
    public $body;
    public $picture;
    public $keywords;
    public $user_id;

    public $orderBy = 'main_title';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'post_id', 'main_title', 'title',
            'body',
            'picture',
            'keywords', 'user_id'
        ]);
    }

    public function render()
    {
        return view(
            'livewire.dashboard.posts.posts',
            [
                'P' => Post::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate(5),
            ]
        );
    }
}
