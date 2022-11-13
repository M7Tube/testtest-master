<?php

namespace App\Http\Livewire\Dashboard\Services;

use Livewire\WithFileUploads;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;
use App\Models\Services;

class EditService extends Component
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

    public function mount()
    {
        $this->service_id = request('id');
        $data = Services::find($this->service_id);
        if ($data) {
            $this->en_name = $data->en_name;
            $this->ar_name = $data->ar_name;
            $this->en_desc = $data->en_desc;
            $this->ar_desc = $data->ar_desc;
            $this->btn_text = $data->btn_text;
            $this->btn_link = $data->btn_link;
        } else {
        }
    }

    public function edit()
    {
        $this->validate([
            'en_name' => ['required', 'string', 'max:7200'],
            'ar_name' => ['required', 'string', 'max:7200'],
            'en_desc' => ['required', 'string', 'max:28800'],
            'ar_desc' => ['required', 'string', 'max:28800'],
            'icon' => ['sometimes', 'nullable', 'mimes:jpg,png,jpeg', 'max:10500'],
            'btn_text' => ['required', 'string', 'max:7200'],
            'btn_link' => ['required', 'string', 'max:7200'],
        ]);
        $data = Services::where('service_id', $this->service_id)->first();
        if ($data) {
            $data->en_name = $this->en_name;
            $data->ar_name = $this->ar_name;
            $data->en_desc = $this->en_desc;
            $data->ar_desc = $this->ar_desc;
            $data->btn_text = $this->btn_text;
            $data->btn_link = $this->btn_link;
            if ($this->icon) {
                $data->icon = $this->icon->getClientOriginalName() ?? $data->icon;
                $this->icon->storeAs('img/', $this->icon->getClientOriginalName());
            }
            $data->save();
            return redirect()->route('Services', app()->getLocale());
        } else {
        }
    }

    public function delete()
    {
        Services::where('service_id', $this->service_id)->delete();
        return redirect()->route('Services', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.services.edit-service');
    }
}
