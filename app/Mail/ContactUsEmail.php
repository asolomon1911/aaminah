<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUsEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    public function build()
    {
        return $this->markdown('emails.contact-us-email')->with([
            'name' => isset($this->data['name']) ?$this->data['name'] : '' ,
            'email' => isset($this->data['email']) ?$this->data['email'] : '' ,
            'message' => isset($this->data['message']) ?$this->data['message'] : '' ,
            'phone' => isset($this->data['phone']) ?$this->data['phone'] : '',
            'agency_county' => isset($this->data['agency_county']) ?$this->data['agency_county'] : '',
        ])->subject('Aaminah\'s House - Contact Us');
    }
}
