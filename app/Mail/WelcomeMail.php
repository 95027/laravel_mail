<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $file;
    /**
     * Create a new message instance.
     */
    public function __construct($data, $file)
    {
        $this->data = $data;
        $this->file = $file;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address('kumarchembeti26@gmail.com', 'sai kumar'),
            replyTo: [
                new Address('kumarchembeti26@gmail.com', 'sai kumar')
            ],
            //subject: $this->subject,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.send-mail',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if($this->file){
            $attachments = [
                Attachment::fromPath(public_path('pdfs/' . $this->file)),
            ];
        }
        return $attachments;
    }
}
