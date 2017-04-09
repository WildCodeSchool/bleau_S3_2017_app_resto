<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppRestoBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;


class ClientController extends Controller
{
    public function clientAction(Request $request)
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
        $comment = new Comment();
        $formCom = $this->createForm('AppRestoBundle\Form\CommentType', $comment);
        $formCom->handleRequest($request);

        if ($formCom->isValid()) {
            $this->date = new \DateTime();

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush($comment);

            return $this->redirect('/bleau_S3_2017_app_resto/web/app_dev.php/');
        }

        return $this->render('AppRestoBundle:Client:client.html.twig', array(
            'menus' => $menus,
            'formCom' => $formCom->createView(),

        ));
    }

    public function newAction()
    {


        return $this->render('comment/new.html.twig', array(
        ));
    }
}

