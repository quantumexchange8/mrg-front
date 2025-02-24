<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ForgotPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function envelop(): Envelope
    {
        return new Envelope(
            subject: 'Forgot Password'
        );
    }

    public function build()
    {
        return $this->subject('Forgot Password')
            ->view('emails.forgotpasswordMail')
            ->with([
                'user' => $this->user,
            ]);
    }
}
