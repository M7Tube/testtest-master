<?php

namespace App\Http\Livewire\Landingpage;

use App\Models\NewsletterEmail;
use Livewire\Component;

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
            $this->reset();
            $this->successmessage='تم تسجيل أيميلك بنجاح';
        }else{
            if(!str_contains($check->keywords,'instagram,')){
                $check->keywords=$check->keywords.'instagram,';
                $check->save();
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
