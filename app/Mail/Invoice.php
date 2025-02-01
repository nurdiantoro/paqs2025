<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Invoice extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $category;
    public $addon;
    public $total_category;
    public $total_addon;
    public $total_price;
    /**
     * Create a new message instance.
     */
    public function __construct($data, $category, $addon, $total_category, $total_addon, $total_price)
    {
        $this->data = $data;
        $this->category = $category;
        $this->addon = $addon;
        $this->total_category = $total_category;
        $this->total_addon = $total_addon;
        $this->total_price = $total_price;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Payment Invoice',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'email.invoice', // Specify the Blade view
            with: ['data' => $this->data], // Pass data to the view
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
