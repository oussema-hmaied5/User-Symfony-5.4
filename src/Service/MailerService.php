<?php

namespace App\Service;


use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class MailerService
{

    private $mailer;


    public function __construct( MailerInterface $mailer)
    {
        $this->mailer = $mailer;

    }

    public function sendEmail($to, $subject, $text): void
    {

        $email = (new Email())
            ->from('douabaghdadi89@gmail.com')
            ->to($to)
            ->subject($subject)
            ->text($text);

        $this->mailer->send($email);

        // ...
    }
}