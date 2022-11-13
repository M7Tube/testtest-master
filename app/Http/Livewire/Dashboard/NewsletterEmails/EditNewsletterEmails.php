<?php

namespace App\Http\Livewire\Dashboard\NewsletterEmails;

use App\Http\Traits\LivewireDashboardTrait;
use App\Models\NewsletterEmail;
use Livewire\Component;

class EditNewsletterEmails extends Component
{
    use LivewireDashboardTrait;

    public $newsletter_email_id;
    public $email;

    public function mount()
    {
        $this->newsletter_email_id = request('id');
        $data = NewsletterEmail::find($this->newsletter_email_id);
        if ($data) {
            $this->email = $data->email;
        } else {
        }
    }

    public function edit()
    {
        $this->validate([
            'email' => ['required', 'email', 'unique:newsletter_emails,email']
        ]);
        $data = NewsletterEmail::where('newsletter_email_id', $this->newsletter_email_id)->first();
        if ($data) {
            $data->email = $this->email;
            $data->save();
            return redirect()->route('NewsletterEmails', app()->getLocale());
        } else {
        }
    }

    public function delete()
    {
        NewsletterEmail::where('newsletter_email_id', $this->newsletter_email_id)->delete();
        return redirect()->route('NewsletterEmails', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.newsletter-emails.edit-newsletter-emails');
    }
}
