<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$furigana,$mail,$phone_number,$message)
    {
        $this->name = $name;
        $this->furigana = $furigana;
        $this->mail = $mail;
        $this->phone_number = $phone_number;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('momonomono1128@gmail.com')
                ->subject('お問い合わせのメッセージ')
                ->view('emails.user_register')
                ->with([
                    'name' => $this->name,
                    'fugrigana' => $this->furigana,
                    'mail' => $this->mail,
                    'phone_numebr' => $this->phone_number,
                    'message' => $this->message
                ]);
    }
}
