<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FirstEmail extends Mailable
{
    use Queueable, SerializesModels;
     public $reply;

    /**
     * Create a new message instance.
     *
     * @return void
     */
  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from("GuruAst@gfh.com")->view('emails.myTestMail');
    }
}
