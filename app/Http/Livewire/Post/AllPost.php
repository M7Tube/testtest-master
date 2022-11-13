<?php

namespace App\Http\Livewire\Post;

use App\Models\AppSettings;
use App\Models\Post;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class AllPost extends Component
{
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';
    public $readyToLoad = false;

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view(
            'livewire.post.all-post',
            [
                'posts' => $this->readyToLoad
                    ? Post::with('user')->paginate(10,['post_id','main_title','title','picture','user_id','body','created_at'])
                    : []
            ]
        );
    }
}
