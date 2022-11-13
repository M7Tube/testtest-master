<?php

namespace App\Http\Livewire\Dashboard\Services;

use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Services as ModelsServices;

class Services extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $service_id;
    public $en_name;
    public $ar_name;
    public $en_desc;
    public $ar_desc;
    public $icon;
    public $btn_text;
    public $btn_link;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'service_id', 'en_name', 'ar_name',
            'en_desc',
            'ar_desc',
            'icon',
            'btn_text', 'btn_link'
        ]);
    }

    public function delete()
    {
        $this->livewire_delete('App\Models\Services', 'service_id', $this->service_id, 'Services Deleted Successfully', 'Updated');
    }

    public function render()
    {
        return view(
            'livewire.dashboard.services.services',
            [
                'S' => ModelsServices::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->paginate(5),
            ]
        );
    }
}
