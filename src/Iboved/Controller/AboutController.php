<?php

namespace Iboved\Controller;

use Iboved\Model\About;
use Symfony\Component\HttpFoundation\Response;

class AboutController extends AbstractController
{
    public function getAboutAction()
    {
        $about = new About();
        return new Response($this->twig->render('about.html.twig', ['data' => $about->getData()]));
    }
}
