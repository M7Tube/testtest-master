<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Item;
use App\Models\Post;
use App\Models\Services;
use App\Models\Skills;
use Livewire\Component;

class Dashboard extends Component
{
    public $skills;
    public $posts;
    public $services;
    public $items;

    public function mount()
    {
        $this->skills = Skills::count();
        $this->posts = Post::count();
        $this->services = Services::count();
        $this->items = Item::count();
    }
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
