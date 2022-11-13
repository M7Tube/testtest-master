<?php

namespace App\Http\Livewire\Dashboard\Posts;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Post;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Livewire\Component;

class CreatePost extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $post_id;
    public $main_title;
    public $title;
    public $body;
    public $picture;
    public $keywords;
    public $user_id;

    public $message;

    public function mount()
    {
        $this->user_id = auth()->id();
    }
    public function updatedPicture()
    {
        $this->validate([
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img/', $this->picture->getClientOriginalName());
    }
//l
    public function create()
    {
        $this->validate([
            'main_title' => ['required', 'string', 'max:144'],
            'title' => ['required', 'string', 'max:144'],
            'body' => ['required', 'string', 'max:10044'],
            'picture' => ['required', 'mimes:jpg,png,jpeg'],
            'keywords' => ['required', 'string', 'max:864'],
        ]);
        Post::Create([
            'main_title' => $this->main_title,
            'title' => $this->title,
            'body' => $this->body,
            'picture' => $this->picture->getClientOriginalName(),
            'keywords' => $this->keywords,
            'user_id' => $this->user_id,
        ]);
        $this->clear();
        return redirect()->route('Posts', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'main_title',
            'title',
            'body',
            'picture',
            'keywords',
            'user_id',
        ]);
    }
// 
    public function render()
    {
        return view('livewire.dashboard.posts.create-post');
    }
}
