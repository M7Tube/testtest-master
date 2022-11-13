<?php

namespace App\Http\Livewire\Services;

use Livewire\WithPagination as LivewireWithPagination;

use App\Models\AppSettings;
use App\Models\Services as ModelsServices;
use Livewire\Component;

class Services extends Component
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
        return view('livewire.services.services', [
            'services' => $this->readyToLoad
            ? ModelsServices::paginate(10)
            : [],
        ]);
    }
}
