<?php
// app/Mail/WebsiteEmail.php

namespace App\Mail;

use App\Models\Email;
use App\Models\EmailMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WebsiteEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;

    /**
     * Create a new message instance.
     */
    public function __construct(EmailMessage $email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from(config('mail.from.address'), config('mail.from.name'))
            ->subject($this->email->subject)
            ->view('emails.template')
            ->with([
                'full_name' => $this->email->full_name,
                'student_email' => $this->email->student_email,
                'birth_date' => $this->email->birth_date,
                'subject' => 'Konfirmasi Pendaftaran Cloud Computing Class'
            ]);
    }
}