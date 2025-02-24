<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $userMessage;

    public function __construct( $name, $email, $userMessage) {
        $this->name = $name;
        $this->email = $email;
        $this->userMessage = $userMessage;
    }

    public function envelop(): Envelope {
        return new Envelope(
                subject: 'New Contact'
        );
    }

    public function build() {
        return $this->subject('New Contact')
                        ->view('emails.contact')
                        ->with([
                            'name' => $this->name,
                            'email' => $this->email,
                            'userMessage' => $this->userMessage,
        ]);
    }
}
