<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/nous-contacter", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer)
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();
            $message = (new Email())
                ->from($contactFormData['email'])
                ->to('andranik.hakobyan42@gmail.com')
                ->subject($contactFormData['sujet'])
                ->text('Sender : '.$contactFormData['email'].\PHP_EOL.$contactFormData["nom"] .' '. $contactFormData["prenom"].\PHP_EOL.
                    $contactFormData['content'] ,

                    'text/plain');
            $mailer->send($message);
            $this->addFlash('notice', 'Merci de nous avoir contacté. Notre équipe va vous répondre dans les meilleurs délais.');

        }
        unset($form);
        $form = $this->createForm(ContactType::class);
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
