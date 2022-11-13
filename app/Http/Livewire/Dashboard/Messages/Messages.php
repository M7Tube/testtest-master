<?php

namespace App\Http\Livewire\Dashboard\Messages;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\ClientMessages;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;

class Messages extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;

    public $message_id;
    public $name;
    public $email;
    public $subject;
    public $message;

    public $orderBy = 'name';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'message_id', 'name',
            'email',
            'subject',
            'message',
        ]);
    }

    public function delete($id)
    {
        ClientMessages::where('message_id', $id)->delete();
    }

    public function render()
    {
        return view('livewire.dashboard.messages.messages',
        [
            'messages' => ClientMessages::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate(5),
        ]
    );
    }
}
