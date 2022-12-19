<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class LandingPage2 extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->attach('../storage/app/pdf/l2.pdf');
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.landing_page_pdf_2')->subject(__("شكرا لتسجيلك , تم أرفاق الملف الذي سوف يساعدك على زيادة مبيعات متجرك الإلكتروني"));
    }
}
