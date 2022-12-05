<?php

namespace App\Http\Livewire\Landingpage;

use App\Mail\ThanksMail;
use App\Models\NewsletterEmail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Landingpage1 extends Component
{
    public $email;
    public $successmessage;

    public function submit()
    {
        $this->validate([
            'email'=>['required','email']
            // ,'unique:newsletter_emails,email'
        ]);
        $check=NewsletterEmail::where('email',$this->email)->first();
        if(!$check){
            NewsletterEmail::Create([
                'email'=>$this->email,
                'keywords'=>'instagram,'
            ]);
            Mail::to($this->email)->send(new ThanksMail());
            $this->reset();
            $this->successmessage='تم تسجيل أيميلك بنجاح';
        }else{
            if(!str_contains($check->keywords,'instagram,')){
                $check->keywords=$check->keywords.'instagram,';
                $check->save();
                Mail::to($this->email)->send(new ThanksMail());
                $this->reset();
                $this->successmessage='تم تسجيل أيميلك بنجاح';
            }else{
                $this->successmessage='أيميلك موجود بالفعل';
            }
        }
    }
    public function render()
    {
        return view('livewire.landingpage.landingpage1');
    }
}
