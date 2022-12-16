<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
class AccountReviewPdf extends Mailable
{
    use Queueable, SerializesModels;
    // public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    // $pdf
    {
        // $this->pdf = $pdf;
    }

    public function attachments()
    {
        return [
            Attachment::fromPath('../storage/app/pdf/pdf_file-7.pdf'),
        ];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.account_review_pdf')->subject(__("ملف المراجعة الخاص بحسابك جاهز."));
    }
}
