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
    public $pdf;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pdf)
    {
        $this->pdf = $pdf;
        $this->attach('../storage/app/pdf/'.$pdf);
    }
    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Attachment[]
    //  */
    // public function attachments()
    // {
    //     return [
    //         Attachment::fromStorage('../storage/app/pdf/pdf_file-7.pdf')
    //                 ->as('name.pdf')
    //                 ->withMime('application/pdf'),
    //     ];
    // }

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
