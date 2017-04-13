<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppRestoBundle\Entity\Comment;
use Symfony\Component\HttpFoundation\Request;
use AppRestoBundle\Entity\Follower;


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

            return $this->redirectToRoute('app_resto_homepage');
        }

        $follower = new Follower();
        $form = $this->createForm('AppRestoBundle\Form\FollowerType' , $follower);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($follower);
            $em->flush($follower);

            return $this->redirectToRoute('app_resto_homepage');
        }

        return $this->render('AppRestoBundle:Client:client.html.twig', array(
            'menus' => $menus,
            'formCom' => $formCom->createView(),
            'form' => $form->createView()

        ));

    }

}

