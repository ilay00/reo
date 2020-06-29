<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendOrder extends Mailable
{
//    FIXIT Настроить отправку писем
    use Queueable, SerializesModels;
    public $feedback;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($feedback)
    {
        $this->feedback = $feedback;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $sid = 'Письмо отправвлено из приложения Restaurants';
        return $this->view('emails.OrderRest', compact('sid', 'sid'));
    }
}
