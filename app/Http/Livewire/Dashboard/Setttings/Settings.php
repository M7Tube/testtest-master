<?php

namespace App\Http\Livewire\Dashboard\Setttings;

use App\Models\AppSettings;
use Livewire\Component;
use Livewire\WithFileUploads;

class Settings extends Component
{
    use WithFileUploads;

    public $en_peronal_name;
    public $ar_peronal_name;
    public $en_peronal_desc;
    public $ar_peronal_desc;
    public $en_job_title;
    public $ar_job_title;
    public $en_skills;
    public $ar_skills;
    public $en_contactWithUs_message;
    public $ar_contactWithUs_message;
    public $email;
    public $phone;
    public $small_personal_pic;
    public $big_personal_pic;
    public $facebook;
    public $twitter;
    public $instagram;
    public $linkedIn;
    public $location;

    public $message;


    public function mount()
    {
        $data = AppSettings::first();
        $this->en_peronal_name = $data->en_peronal_name;
        $this->ar_peronal_name = $data->ar_peronal_name;
        $this->en_peronal_desc = $data->en_peronal_desc;
        $this->ar_peronal_desc = $data->ar_peronal_desc;
        $this->en_job_title = $data->en_job_title;
        $this->ar_job_title = $data->ar_job_title;
        $this->en_skills = $data->en_skills;
        $this->ar_skills = $data->ar_skills;
        $this->en_contactWithUs_message = $data->en_contactWithUs_message;
        $this->ar_contactWithUs_message = $data->ar_contactWithUs_message;
        $this->email = $data->email;
        $this->phone = $data->phone;
        // $this->small_personal_pic = $data->small_personal_pic;
        // $this->big_personal_pic = $data->big_personal_pic;
        $this->facebook = $data->facebook;
        $this->twitter = $data->twitter;
        $this->instagram = $data->instagram;
        $this->linkedIn = $data->linkedIn;
        $this->location = $data->location;
    }

    public function edit()
    {
        $this->validate([
            'en_peronal_name' => ['required'],
            'ar_peronal_name' => ['required'],
            'en_peronal_desc' => ['required'],
            'ar_peronal_desc' => ['required'],
            'en_job_title' => ['required'],
            'ar_job_title' => ['required'],
            'en_skills' => ['required'],
            'ar_skills' => ['required'],
            'en_contactWithUs_message' => ['required'],
            'ar_contactWithUs_message' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'small_personal_pic' => ['sometimes', 'nullable', 'mimes:jpg,png,jpeg', 'max:10500'],
            'big_personal_pic' => ['sometimes', 'nullable', 'mimes:jpg,png,jpeg', 'max:10500'],
            'facebook' => ['required'],
            'twitter' => ['required'],
            'instagram' => ['required'],
            'linkedIn' => ['required'],
            'location' => ['required'],
        ]);
        $data = AppSettings::first();
        $data->en_peronal_name = $this->en_peronal_name;
        $data->ar_peronal_name = $this->ar_peronal_name;
        $data->en_peronal_desc = $this->en_peronal_desc;
        $data->ar_peronal_desc = $this->ar_peronal_desc;
        $data->en_job_title = $this->en_job_title;
        $data->ar_job_title = $this->ar_job_title;
        $data->en_skills = $this->en_skills;
        $data->ar_skills = $this->ar_skills;
        $data->en_contactWithUs_message = $this->en_contactWithUs_message;
        $data->ar_contactWithUs_message = $this->ar_contactWithUs_message;
        $data->email = $this->email;
        $data->phone = $this->phone;
        if ($this->big_personal_pic) {
            $data->big_personal_pic = $this->big_personal_pic->getClientOriginalName() ?? $data->big_personal_pic;
            $this->big_personal_pic->storeAs('img/', $this->big_personal_pic->getClientOriginalName());
        }
        if ($this->small_personal_pic) {
            $data->small_personal_pic = $this->small_personal_pic->getClientOriginalName() ?? $data->small_personal_pic;
            $this->small_personal_pic->storeAs('img/', $this->small_personal_pic->getClientOriginalName());
        }
        $data->facebook = $this->facebook;
        $data->twitter = $this->twitter;
        $data->instagram = $this->instagram;
        $data->linkedIn = $this->linkedIn;
        $data->location = $this->location;
        $data->save();
        $this->message = "Done !";
        return redirect()->route('Settings', app()->getLocale());
    }

    public function render()
    {
        return view('livewire.dashboard.setttings.settings');
    }
}
