<?php

namespace App\Http\Livewire\Dashboard\Skills;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Skills;
use Livewire\Component;

class EditSkill extends Component
{
    use LivewireDashboardTrait;

    public $skill_id;
    public $en_name;
    public $ar_name;
    public $percent;

    public function mount()
    {
        $this->skill_id = request('id');
        $data = Skills::find($this->skill_id);
        if ($data) {
            $this->en_name = $data->en_name;
            $this->ar_name = $data->ar_name;
            $this->percent = $data->percent;
        } else {
        }
    }

    public function edit()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:144'],
            'ar_name' => ['required', 'string', 'max:144'],
            'percent' => ['required', 'integer', 'min:0', 'max:100'],
        ]);
        $data = Skills::where('skill_id', $this->skill_id)->first();
        if ($data) {
            $data->en_name = $this->en_name;
            $data->ar_name = $this->ar_name;
            $data->percent = $this->percent;
            $data->save();
            return redirect()->route('Skills', app()->getLocale());
        } else {
        }
    }

    public function delete()
    {
        Skills::where('skill_id', $this->skill_id)->delete();
        return redirect()->route('Skills', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.skills.edit-skill');
    }
}
