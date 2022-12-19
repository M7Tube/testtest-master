<?php

namespace App\Http\Livewire\Landingpage;

use App\Mail\LandingPage2 as MailLandingPage2;
use App\Models\AccountsNeedReview;
use App\Models\NewsletterEmail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Landingpage2 extends Component
{
    public $email;
    public $successmessage;
    public function submit()
    {
        $this->validate([
            'email' => ['required', 'email'],
            // ,'unique:newsletter_emails,email'
        ]);
        $check = NewsletterEmail::where('email', $this->email)->first();
        if (!$check) {
            NewsletterEmail::Create([
                'email' => $this->email,
                'keywords' => 'ecommerce,'
            ]);
            Mail::to($this->email)->send(new MailLandingPage2());
            $this->reset();
            $this->successmessage='تم تسجيل طلبك بنجاح';
        } else {
            if (!str_contains($check->keywords, 'ecommerce,')) {
                $check->keywords = $check->keywords . 'ecommerce,';
                $check->save();
                Mail::to($this->email)->send(new MailLandingPage2());
                $this->reset();
                $this->successmessage='تم تسجيل طلبك بنجاح';
            } else {
                $this->reset();
                $this->successmessage='تم تسجيل طلبك بنجاح';
                $this->successmessage='أيميلك موجود بالفعل';
            }
        }
        $this->reset();
        $this->successmessage = 'تم تسجيل طلبك بنجاح';
    }

    public function render()
    {
        return view('livewire.landingpage.landingpage2');
    }
}
