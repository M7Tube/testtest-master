<?php

namespace App\Http\Livewire\Dashboard\Services;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Services;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateService extends Component
{
    use LivewireDashboardTrait;
    use WithFileUploads;

    public $service_id;
    public $en_name;
    public $ar_name;
    public $en_desc;
    public $ar_desc;
    public $icon;
    public $btn_text;
    public $btn_link;

    public $message;

    public function create()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:7200'],
            'ar_name' => ['required', 'string', 'max:7200'],
            'en_desc' => ['required', 'string', 'max:288000'],
            'ar_desc' => ['required', 'string', 'max:288000'],
            'icon' => ['required', 'mimes:jpg,png,jpeg', 'max:10500'],
            'btn_text' => ['required', 'string', 'max:7200'],
            'btn_link' => ['required', 'string', 'max:7200'],

        ]);
        Services::Create([
            'en_name' => $this->en_name,
            'ar_name' => $this->ar_name,
            'en_desc' =>  $this->en_desc,
            'ar_desc' =>  $this->ar_desc,
            'icon' =>  $this->icon->getClientOriginalName() ?? '',
            'btn_text' =>  $this->btn_text,
            'btn_link' =>  $this->btn_link,
        ]);
        if ($this->icon) {
            $this->icon->storeAs('img/', $this->icon->getClientOriginalName());
        }
        $this->clear();
        session()->flash('message', 'Services Created Successfully');
        return redirect()->route('Services', app()->getLocale());
    }

    public function clear()
    {
        $this->livewire_clear([
            'en_name',
            'ar_name',
            'en_desc',
            'ar_desc',
            'icon',
            'btn_text',
            'btn_link',
        ]);
    }
    public function render()
    {
        return view('livewire.dashboard.services.create-service');
    }
}
