<?php

namespace App\Http\Livewire\Items;

use App\Models\Item;
use Livewire\Component;

class ShowItem extends Component
{
    public function render()
    {
        return view('livewire.items.show-item', [
            'item' => Item::where('item_id', request('id'))->first(),
        ]);
    }
}
