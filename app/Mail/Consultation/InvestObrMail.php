<?php

namespace App\Mail\Consultation;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;

use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class InvestObrMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $formData;
    public $attachment_file;

    public function __construct($formData, $attachment_file)
    {
        $this->formData = $formData;
        $this->attachment_file = $attachment_file;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address("inwestportal@yandex.ru", "Инвестиционный портал Курской области"),
            subject: 'Обращение в инвестиционный коммитет',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'mail.consultation.invest_obr',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        if (!empty($this->attachment_file))
            return  Attachment::fromPath($this->attachment_file)->as($this->attachment_file->getClientOriginalName());
        else
            return [];
    }
}
