<?php

namespace App\Http\Livewire\Services;

use App\Models\Services;
use Livewire\Component;

class ShowService extends Component
{
    public function render()
    {
        return view('livewire.services.show-service', [
            'service' => Services::where('service_id', request('id'))->first(),
        ]);
    }
}
