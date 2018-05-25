<?php

namespace App\Mail;

use Request;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FormulaireContact extends Mailable
{
    use Queueable, SerializesModels;
    public $title;
    public $content;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $values = Request::all();

        return $this->from($values['email_contact'], getenv('APP_NAME'))
            ->subject('Formulaire de message')
            ->view('layouts.email-mailtrap');
    }
}
