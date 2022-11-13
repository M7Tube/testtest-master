<?php

namespace App\Http\Livewire\Dashboard\Posts;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;


class EditPost extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $post_id;
    public $main_title;
    public $title;
    public $body;
    public $oldpicture;
    public $picture;
    public $keywords;
    public $user_id;

    public $message;

    public function mount()
    {
        $this->post_id = request('id');
        $data = Post::find($this->post_id);
        if ($data) {
            $this->main_title = $data->main_title;
            $this->title = $data->title;
            $this->body = $data->body;
            $this->oldpicture = $data->picture;
            $this->keywords = $data->keywords;
        } else {
        }
    }

    public function updatedPicture()
    {
        $this->validate([
            'picture' => ['mimes:jpg,png,jpeg'],
        ]);
        $this->picture->storeAs('img/', $this->picture->getClientOriginalName());
    }
// 
    public function edit()
    {
        $this->validate([
            'main_title' => ['string', 'max:144'],
            'title' => ['string', 'max:144'],
            'body' => ['string', 'max:10044'],
            'keywords' => ['string', 'max:864'],
        ]);
        $data = Post::where('post_id', $this->post_id)->first();
        if ($data) {
            $data->main_title = $this->main_title;
            $data->title = $this->title;
            $data->body = $this->body;
            if (!$this->picture) {
                $data->picture = $this->oldpicture;
            } else {
                $data->picture = $this->picture->getClientOriginalName();
            }
            $data->keywords = $this->keywords;
            $data->save();
            return redirect()->route('Posts', app()->getLocale());
        } else {
        }
    }

    public function delete()
    {
        Post::where('post_id', $this->post_id)->delete();
        return redirect()->route('Posts', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.posts.edit-post');
    }
}
