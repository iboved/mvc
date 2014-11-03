<?php

namespace Iboved;

class IbovedKernel extends Kernel
{
    public function getRoutes()
    {
        return array(
            ['GET', '/', 'Iboved\Controller\IndexController:indexAction'],

            ['GET', '/about', 'Iboved\Controller\AboutController:getAboutAction'],
            ['GET', '/contact', 'Iboved\Controller\ContactController:getContactAction'],
            ['GET', '/contact/{id}', 'Iboved\Controller\ContactController:getIdContactAction'],
        );
    }

    public function getTemplateHandler()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../app/views');
        $twig = new \Twig_Environment($loader);

        return $twig;
    }
}
