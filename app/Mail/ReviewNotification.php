<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReviewNotification extends Mailable
{
    use Queueable, SerializesModels;

    private string $title;
    private string $message;
    private string $email;
    private ?string $link;

    /**
     * Create a new message instance.
     */
    public function __construct(string $title, string $message, string $link = null)
    {
        $this->title = $title;
        $this->message = $message;
        $this->link = $link;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.reviews.notification',
            with: [
                'title' => $this->title,
                'message' => $this->message,
                "link" => $this->link
            ]
        );

    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
