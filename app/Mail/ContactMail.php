<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public $contactbody;

    /**
     * Create a new message instance.
     */
    public function __construct($contactbody)
    {
        $this->contactbody = $contactbody;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->contactbody['email']),
            subject: 'Contact Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: ('email'),
            with: [
                'name' => $this->contactbody['name'],
                'email' => $this->contactbody['email'],
                'phone' => $this->contactbody['phone'],
                'comment' => $this->contactbody['comment'],
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
