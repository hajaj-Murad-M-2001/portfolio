<?php

namespace App\Mail;

use App\Models\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactMessageMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * @var Message
     */
    public Message $contactMessage;

    // استقبال نموذج الرسالة
    public function __construct(Message $contactMessage)
    {
        $this->contactMessage = $contactMessage;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '📩 رسالة جديدة من موقعك الشخصي: ' . $this->contactMessage->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.contact.new-message', // ملف الـ Blade الخاص بتصميم الإيميل
        );
    }
}