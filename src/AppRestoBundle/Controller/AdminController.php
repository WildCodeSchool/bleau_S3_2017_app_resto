<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function adminAction()
    {

        $days = ['','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];
        $types = ['Plat', 'Garniture', 'Entrée', 'Dessert'];

        return $this->render('AppRestoBundle:Admin:admin.html.twig',
            array ('days' => $days, 'types' => $types )
            );

    }

    public function counterAction()
    {
        return $this->render('AppRestoBundle:Admin:counter.html.twig');
    }

}





