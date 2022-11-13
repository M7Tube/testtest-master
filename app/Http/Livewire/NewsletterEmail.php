<?php

namespace App\Http\Livewire;

use App\Models\NewsletterEmail as ModelsNewsletterEmail;
use Livewire\Component;

class NewsletterEmail extends Component
{

    public $email;
    public $message;

    public function subscribe()
    {
        $this->validate([
            'email' => ['required', 'email', 'unique:newsletter_emails,email']
        ]);
        ModelsNewsletterEmail::Create([
            'email' => $this->email
        ]);
        $this->email = null;
        $this->message = __('Done !');
    }

    public function render()
    {
        return view('livewire.newsletter-email');
    }
}
