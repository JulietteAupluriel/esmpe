<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Subscription extends Mailable
{
    use Queueable, SerializesModels;

    public $emailContent;

    public function __construct($emailContent)
    {
        $this->emailContent = $emailContent;
    }

    public function build()
    {
        return $this->subject("Printemps de l'Emploi: Nous avons bien reçu votre formulaire d'inscription")->markdown('emails.confirmation', ['content' => $this->emailContent]);
    }
}
