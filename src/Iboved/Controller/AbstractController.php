<?php

namespace Iboved\Controller;

use Symfony\Component\HttpFoundation\Request;

class AbstractController
{
    protected $request;
    protected $twig;

    public function __construct(Request $request, \Twig_Environment $twig)
    {
        $this->request = $request;
        $this->twig    = $twig;
    }
}
