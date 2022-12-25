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
    protected $paginationTheme = 'bootstrap';

}
