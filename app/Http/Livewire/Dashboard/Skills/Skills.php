<?php

namespace App\Http\Livewire\Dashboard\Skills;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Skills as ModelsSkills;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class Skills extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $skill_id;
    public $en_name;
    public $ar_name;
    public $percent;

    public $orderBy = 'en_name';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'skill_id', 'en_name', 'ar_name',
            'percent',
        ]);
    }

    public function render()
    {
        return view(
            'livewire.dashboard.skills.skills',
            [
                'skills' => ModelsSkills::search($this->search)
                    ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                    ->simplePaginate(5),
            ]
        );
    }
}
