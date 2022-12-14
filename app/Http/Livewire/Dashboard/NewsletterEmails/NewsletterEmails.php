<?php

namespace App\Http\Livewire\Dashboard\NewsletterEmails;

use App\Models\NewsletterEmail;
use Livewire\WithPagination as LivewireWithPagination;
use Livewire\Component;
use App\Http\Traits\LivewireDashboardTrait;


class NewsletterEmails extends Component
{
    use LivewireDashboardTrait;
    use LivewireWithPagination;
    protected $paginationTheme = 'bootstrap';
    public $newsletter_email_id;
    public $email;

    public $orderBy = 'email';
    public $orderAsc = true;
    public $search = '';

    public function clear()
    {
        $this->livewire_clear([
            'newsletter_email_id', 'email'
        ]);
    }

    public function render()
    {
        return view(
            'livewire.dashboard.newsletter-emails.newsletter-emails',
            [
                'NLE' => NewsletterEmail::latest()->paginate(25),
            ]
        );
    }
}
