<?php

namespace Iboved\Controller;

use Iboved\Model\Contact;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    public function getContactAction()
    {
        $contact = new Contact();
        return new Response($this->twig->render('contact.html.twig', ['data' => $contact->getData()]));
    }

    public function getIdContactAction($id)
    {
        $contact = new Contact();
        return new Response($this->twig->render('contact.html.twig', ['data' => $contact->getDataId($id)]));
    }
}
