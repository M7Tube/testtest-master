<?php

namespace App\Http\Livewire\Messages;

use App\Models\AppSettings;
use App\Models\ClientMessages;
use Livewire\Component;

class SendMessage extends Component
{
    public $info;
    public $name;
    public $email;
    public $subject;
    public $message;

    public $success;

    public function mount()
    {
        // $this->info = AppSettings::first();
    }

    public function sendMessage()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:288'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string', 'max:288'],
            'message' => ['required', 'string', 'max:1044'],
        ]);
        ClientMessages::Create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);
        $this->clear();
        $this->success = __('Done !');
    }

    public function clear()
    {
        $this->name = null;
        $this->email = null;
        $this->subject = null;
        $this->message = null;
    }
    public function render()
    {
        return view('livewire.messages.send-message');
    }
}
