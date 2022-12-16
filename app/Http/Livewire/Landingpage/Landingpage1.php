<?php

namespace App\Http\Livewire\Landingpage;

use App\Mail\ThanksMail;
use App\Models\AccountsNeedReview;
use App\Models\NewsletterEmail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Landingpage1 extends Component
{
    public $name;
    public $url;
    public $message;
    public $email;
    public $successmessage;

    public function submit()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url'],
            'message' => ['required', 'string', 'max:10500'],
            'email' => ['required', 'email'],
            // ,'unique:newsletter_emails,email'
        ]);
        $check = NewsletterEmail::where('email', $this->email)->first();
        if (!$check) {
            NewsletterEmail::Create([
                'email' => $this->email,
                'keywords' => 'instagram,'
            ]);
            // Mail::to($this->email)->send(new ThanksMail());
            // $this->reset();
            // $this->successmessage='تم تسجيل طلبك بنجاح';
        } else {
            if (!str_contains($check->keywords, 'instagram,')) {
                $check->keywords = $check->keywords . 'instagram,';
                $check->save();
                // Mail::to($this->email)->send(new ThanksMail());
                // $this->reset();
                // $this->successmessage='تم تسجيل طلبك بنجاح';
            } else {
                // $this->reset();
                // $this->successmessage='تم تسجيل طلبك بنجاح';
                // $this->successmessage='أيميلك موجود بالفعل';
            }
        }
        $check2 = AccountsNeedReview::Create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'url' => $this->url,
        ]);
        $this->reset();
        $this->successmessage = 'تم تسجيل طلبك بنجاح';
    }
    public function render()
    {
        return view('livewire.landingpage.landingpage1');
    }
}
