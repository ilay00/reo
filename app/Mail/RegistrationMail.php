<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationMail extends Mailable
{
    use Queueable, SerializesModels;
     
    protected $userName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($userName)
    {
        $this->userName=$userName;
    }

    /**
     * Build the message.
     *https://stackoverflow.com/questions/31871806/laravel-homestead-swift-cannot-send-message-without-a-sender-address

     * @return $this
     */
    public function build()
    {
          

        return $this->view('emails.registration')->with([
            'userName'=>$this->userName
        ]);

    }
}
