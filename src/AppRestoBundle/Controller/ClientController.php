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
        //Get Days of the week
        $repository = $this->getDoctrine()->getManager()->getRepository('AppRestoBundle:Week');
        $weekStart = new \DateTime("last Monday");
        $weeks = $repository->findOneBy(array(
            'start_week' => $weekStart
        ));

        //Set a Tab for increment week's days

        $days = $weeks->getDays();
        $daysWeeks = ['lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

        //Get Comments, Add Comments
        $comment = new Comment();
        $formCom = $this->createForm('AppRestoBundle\Form\CommentType', $comment);
        $formCom->handleRequest($request);

        if ($formCom->isSubmitted() && $formCom->isValid()) {

            $this->date = new \DateTime();

            $em = $this->getDoctrine()->getManager();
            $em->persist($comment);
            $em->flush();

            return $this->redirectToRoute('app_resto_homepage');
        }

        //Newsletter
        $follower = new Follower();
        $form = $this->createForm('AppRestoBundle\Form\FollowerType' , $follower);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($follower);
            $em->flush();

            return $this->redirectToRoute('app_resto_homepage');
        }

        return $this->render('AppRestoBundle:Client:client.html.twig', array(
            'days' => $days,
            'daysWeeks' => $daysWeeks,
            'formCom' => $formCom->createView(),
            'form' => $form->createView()
        ));

    }

}

