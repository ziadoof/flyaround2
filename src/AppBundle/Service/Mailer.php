<?php
/**
 * Created by PhpStorm.
 * User: ziadoof
 * Date: 04/06/18
 * Time: 20:59
 */

namespace AppBundle\Service;


class Mailer
{
    private $mailer;

    private $templating;


    public function __construct(\Swift_Mailer $mailer, \Twig_Environment $templating)
    {
        $this->mailer = $mailer;
        $this->templating = $templating;
    }


    public function sendMail($destinataire, $typeMessage)
    {
        $message = (new \Swift_Message('Réservation Flyaround'))
            ->setFrom('reservations@flyaround.com')
            ->setTo($destinataire);
        if ($typeMessage === 'confirmation') {
            $message->setBody($this->templating->render('mail/confirmation.html.twig'), 'text/html');
        } else {
            $message->setBody($this->templating->render('mail/notification.html.twig'), 'text/html');
        }
        $this->mailer->send($message);
    }
}