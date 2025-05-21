<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionMail extends Mailable
{
    use Queueable, SerializesModels;

    public $articles;
    public $promotions;

    public function __construct($articles, $promotions)
    {
        $this->articles = $articles;
        $this->promotions = $promotions;
    }

    public function build()
    {
        return $this->subject('Подписка на новости и акции')
                    ->markdown('emails.subscription');
    }
}
