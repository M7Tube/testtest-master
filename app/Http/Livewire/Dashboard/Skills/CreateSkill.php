<?php

namespace App\Http\Livewire\Dashboard\Skills;

use App\Http\Traits\LivewireDashboardTrait;
use Livewire\Component;

class CreateSkill extends Component
{
    use LivewireDashboardTrait;

    public $skill_id;
    public $en_name;
    public $ar_name;
    public $percent;

    public $message;

    public function create()
    {
        $this->livewire_create(
            [
                'en_name' => ['required', 'string', 'max:144'],
                'ar_name' => ['required', 'string', 'max:144'],
                'percent' => ['required', 'integer', 'min:0', 'max:100'],
            ],
            'App\Models\Skills',
            [
                'en_name',
                'ar_name',
                'percent',
            ],
            'Skills Created Successfully',
            'Created'
        );
        return redirect()->route('Skills', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'en_name',
            'ar_name',
            'percent',
        ]);
    }
    public function render()
    {
        return view('livewire.dashboard.skills.create-skill');
    }
}
