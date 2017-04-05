<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ClientController extends Controller
{
    public function clientAction()
    {
        $menus = array(
            (object) array(
                'day' => 'Lundi',
                'e1' => 'Carottes rapées',
                'e2' => 'Salade niçoise',
                'e3' => 'Tomate farcie',
                'p1' => 'Ragout',
                'p2' => 'Ravioli',
                'd1' => 'Île flottante',
                'd2' => 'Crême brullée',
                'd3' => 'Pêche Meleba'
            ),
            (object) array(
                'day' => 'Mardi',
                'e1' => 'Carottes rapées',
                'e2' => 'Salade niçoise',
                'e3' => 'Tomate farcie',
                'p1' => 'Ragout',
                'p2' => 'Ravioli',
                'd1' => 'Île flottante',
                'd2' => 'Crême brullée',
                'd3' => 'Pêche Meleba'
            ),
            (object) array(
                'day' => 'Mercredi',
                'e1' => 'Carottes rapées',
                'e2' => 'Salade niçoise',
                'e3' => 'Tomate farcie',
                'p1' => 'Ragout',
                'p2' => 'Ravioli',
                'd1' => 'Île flottante',
                'd2' => 'Crême brullée',
                'd3' => 'Pêche Meleba'
            ),
            (object) array(
                'day' => 'Jeudi',
                'e1' => 'Carottes rapées',
                'e2' => 'Salade niçoise',
                'e3' => 'Tomate farcie',
                'p1' => 'Ragout',
                'p2' => 'Ravioli',
                'd1' => 'Île flottante',
                'd2' => 'Crême brullée',
                'd3' => 'Pêche Meleba'
            ),
            (object) array(
                'day' => 'Vendredi',
                'e1' => 'Carottes rapées',
                'e2' => 'Salade niçoise',
                'e3' => 'Tomate farcie',
                'p1' => 'Ragout',
                'p2' => 'Ravioli',
                'd1' => 'Île flottante',
                'd2' => 'Crême brullée',
                'd3' => 'Pêche Meleba'
            ),
        );
        return $this->render('AppRestoBundle:Client:client.html.twig', array(
            'menus' => $menus,
        ));
    }
}
