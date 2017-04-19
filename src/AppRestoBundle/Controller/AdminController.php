<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Day;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function loadWeekAjaxAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $weeks = $em->getRepository('AppRestoBundle:Week')->getWeekAdmin();

        if($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $weekStart = $request->get('selectedWeek');

            if ($weekStart){
                $week = $em->getRepository('AppRestoBundle:Week')->findOneBy(array(
                    'start_week' => new \DateTime($weekStart)
                ));
            }
            else{
                $week = $em->getRepository('AppRestoBundle:Week')->findOneBy(array(
                    'start_week' => new \DateTime('last monday')
                ));
            }

            if($week->getDays()->isEmpty()) {
                for ($i=0; $i < 5; $i++){
                    $day = new Day();
                    $date = new \DateTime($weekStart);
                    $date = $date->modify('+' . $i . 'day');
                    $day->setDate($date);
                    $week->getDays()->add($day);
                }
            }

            $form = $this->createForm('AppRestoBundle\Form\WeekType', $week);
            $form->handleRequest($request);

            $response = new JsonResponse();
            $content = array(
                "form" => null,
                "msg" => null
            );

            if ($form->isSubmitted()){
                if ($form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($week);
                    $em->flush();
                    $response->setStatusCode(200);
                    $content["msg"] =  "Menu enregistré";
                }
                else{
                    $response->setStatusCode(412);
                    $content["msg"] = "Erreur dans la saisi";
                }
            }

            $content["form"] = $this->renderView('@AppResto/Admin/week_menu.html.twig', array(
                        'form' => $form->createView(),
                        'week' => $week
                        ));

            $response->setData($content);

            return $response;
        }
        return $this->render('@AppResto/Admin/admin.html.twig', array(
            'weeks' => $weeks
        ));
    }

    public function counterAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comments = $em->getRepository('AppRestoBundle:Comment')
            ->findBy(
                array('valid' => null),
                array('id' => 'desc')
            );

        //Valid button action

        return $this->render('AppRestoBundle:Admin:counter.html.twig', array(
            'comments' => $comments,
        ));
    }

    public function validAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $comment = $em->getRepository('AppRestoBundle:Comment')
            ->findOneById($id);

        $comment->setValid('1');
        $em->flush();

        return $this->redirectToRoute('app_resto_admin_counter');
    }

    public function archivAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository('AppRestoBundle:Comment')
            ->findOneById($id);
        $comments->setValid('0');
        $em->flush();

        return $this->redirectToRoute('app_resto_admin_counter');
    }

    public function sendAction()
    {

        $repository = $this->getDoctrine()->getManager();
        $weekStart = new \DateTime("next Monday");
        $week = $repository->getRepository('AppRestoBundle:Week')->findOneBy(array(
            'start_week' => $weekStart
        ));

        //$em = $this->getDoctrine()->getManager();
        //$menu = $em->getRepository("AppRestoBundle:Week")->findAll();

        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('solomon.grundy.51@gmail.com');

        $followers = $this->mailAction();
        foreach($followers as $follower){
            $message->setBody(
                $this->renderView('Emails/registration.html.twig', array(
                    'week' => $week,
                    'user' => $follower->getId()
                )
            ),
            'text/html'
            );
            $message->setTo($follower->getMail());
            $this->get('mailer')->send($message);
        }

        return $this->redirectToRoute('app_resto_admin');
    }

    public function mailAction()
    {
        $em = $this->getDoctrine()->getManager();

        $followers = $em->getRepository('AppRestoBundle:Follower')->findAll();

        return $followers;
    }
}





