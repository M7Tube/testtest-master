<?php

namespace App\Http\Livewire\Items;

use App\Models\AppSettings;
use App\Models\Item;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class Items extends Component
{
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';

    // public $info;
    public $readyToLoad = false;

    public function loadData()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view(
            'livewire.items.items',
            [
                'items' => $this->readyToLoad
                    ?  Item::paginate(10,['item_id','ar_name','en_name','picture'])
                    : [],
            ]
        );
    }
}
