<?php

namespace Iboved\Controller;

use Iboved\Model\Contact;
use Symfony\Component\HttpFoundation\Response;

class ContactController extends AbstractController
{
    public function getContactAction()
    {
        $about = new Contact();
        return new Response($this->twig->render('contact.html.twig', ['data' => $about->getData()]));
    }
}
