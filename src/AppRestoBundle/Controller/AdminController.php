<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function adminAction()
    {
        return $this->render('AppRestoBundle:Admin:admin.html.twig');
    }

    public function counterAction()
    {
        return $this->render('AppRestoBundle:Admin:counter.html.twig');
    }

}





