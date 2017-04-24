<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppRestoBundle\Entity\Comment;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use AppRestoBundle\Entity\Follower;
use Symfony\Component\HttpFoundation\Response;


class ClientController extends Controller
{
    public function clientAction(Request $request)
    {
        //Get Days of the week
        $repository = $this->getDoctrine()->getManager()->getRepository('AppRestoBundle:Week');

        //Conditions to select week's start
        $today = new \DateTime("today");
        $deadLine = new \DateTime("thursday");
        $deadLine->modify("+12 hours");

        $monday = new \DateTime("monday");
        $mondaySt = $monday->format('D');
        $todaySt = $today->format('D');

        if ($todaySt == $mondaySt)
        {
            $weekStart = $monday;
        }
        elseif ($today > $deadLine) {
            $weekStart = new \DateTime("next Monday");
        }
        elseif ($today < $deadLine) {
            $weekStart = new \DateTime("last Monday");
        }

        $weeks = $repository->findOneBy(array(
            'start_week' => $weekStart
        ));

        //Set a Tab for increment week's days

        $days = $weeks->getDays();
        $daysWeeks = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];

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
            'form' => $form->createView(),
            'week' => $weeks
        ));
    }

    public function resaAction(){
        $data = $_REQUEST;
        $em = $this->getDoctrine()->getManager();

        //Conditions to select week's start
        $today = new \DateTime("today");
        $deadLine = new \DateTime("thursday");
        $deadLine->modify("+12 hours");

        $monday = new \DateTime("monday");
        $mondaySt = $monday->format('D');
        $todaySt = $today->format('D');

        if ($todaySt == $mondaySt)
        {
            $weekStart = $monday;
        }
        elseif ($today > $deadLine) {
            $weekStart = new \DateTime("next Monday");
        }
        elseif ($today < $deadLine) {
            $weekStart = new \DateTime("last Monday");
        }

        $days = $em->getRepository('AppRestoBundle:Week')->findOneBy(
            array(
            'start_week' => $weekStart
            ),
            array(
                'id' => 'DESC'
            )
        )->getDays();

        foreach ($data as $key => $type){
             if ($key == 'Lundi'){
                 $days[0]->getResas()->increment($type);
             }
             if ($key == 'Mardi'){
                 $days[1]->getResas()->increment($type);
             }
             if ($key == 'Mercredi'){
                 $days[2]->getResas()->increment($type);
             }
             if ($key == 'Jeudi'){
                 $days[3]->getResas()->increment($type);
             }
             if ($key == 'Vendredi'){
                 $days[4]->getResas()->increment($type);
             }
        }
        $em->flush();

        return $this->redirectToRoute('app_resto_homepage');
        // TODO: implement flash message
    }

}

