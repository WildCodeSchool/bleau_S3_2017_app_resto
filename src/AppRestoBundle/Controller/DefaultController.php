<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppRestoBundle:Default:index.html.twig');
    }
}
