<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function clientAction()
    {
        $days = array(
            (object) array(
                'day' => 'lundi',
                'p1' => 'ragout',
                'e1' => 'se que tu veux'
            ),
            (object) array(
                'day' => 'mardi',
                'p1' => 'ragout',
                'e1' => 'se que tu veux'
            ),
            (object) array(
                'day' => 'mercredi',
                'p1' => 'ragout',
                'e1' => 'se que tu veux'
            ),
            (object) array(
                'day' => 'jeudi',
                'p1' => 'ragout',
                'e1' => 'se que tu veux'
            ),
            (object) array(
                'day' => 'vendredi',
                'p1' => 'ragout',
                'e1' => 'se que tu veux'
            )
        );
        return $this->render('AppRestoBundle:Client:client.html.twig', array(
            'days' => $days,
        ));
    }
}
