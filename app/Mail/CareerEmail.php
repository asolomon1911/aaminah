<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CareerEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public function __construct($data)
    {
        $this->data=$data;
    }

    public function build()
    {
        return $this->markdown('emails.career-email')->with([
            'first_name' => isset($this->data['first_name']) ?$this->data['first_name'] : '' ,
            'last_name' => isset($this->data['last_name']) ?$this->data['last_name'] : '' ,
            'email' => isset($this->data['email']) ?$this->data['email'] : '' ,
            'phone' => isset($this->data['phone']) ?$this->data['phone'] : '',
            'position' => isset($this->data['position']) ?$this->data['position'] : '' ,
            'file_path' => isset($this->data['file_path']) ? env('APP_URL', 'https://aaminahfrc.com').$this->data['file_path'] : '' ,
            'has_file' => isset($this->data['file_path']),
            'description' => isset($this->data['description']) ?$this->data['description'] : '',
        ])->subject('Aaminah\'s House - Career ');
    }
}
