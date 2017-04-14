<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Day;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    public function adminAction(Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppRestoBundle:Week');
        $weekStart = new \DateTime("last Monday");
        $week = $repository->findOneBy(array(
            'start_week' => $weekStart
        ));

        if($week->getDays()->isEmpty()) {
            $lundi = new Day();
            $lundi->setDate($weekStart);
            $week->getDays()->add($lundi);

            $mardi = new Day();
            $mardi->setDate($weekStart)->modify('+1 day');
            $week->getDays()->add($mardi);

            $mercredi = new Day();
            $mercredi->setDate($weekStart)->getDate()->modify('+2 day');
            $week->getDays()->add($mercredi);

            $jeudi = new Day();
            $jeudi->setDate($weekStart)->getDate()->modify('+3 day');
            $week->getDays()->add($jeudi);

            $vendredi = new Day();
            $vendredi->setDate($weekStart)->getDate()->modify('+4 day');
            $week->getDays()->add($vendredi);
        }

        $form = $this->createForm('AppRestoBundle\Form\WeekType', $week);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($week);
            $em->flush();

            return $this->redirectToRoute('app_resto_admin');
        }

        return $this->render('@AppResto/Admin/admin.html.twig', array(
            'week' => $week,
            'form' => $form->createView(),
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

        $tab;
        foreach($this->mailAction() as $follower){
            foreach($follower as $z){
                $tab[] = $z->getMail();
            }
        }

        $message = \Swift_Message::newInstance()
            ->setSubject('Hello Email')
            ->setFrom('solomon.grundy.51@gmail.com')
            ->setTo($tab)

            ->setBody(
                $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                    'Emails/registration.html.twig', array(
                        'week' => $week
                        )
                ),
                'text/html'
            )
        ;
        $this->get('mailer')->send($message);

        return $this->redirectToRoute('app_resto_admin');
    }

    public function mailAction()
    {
        $em = $this->getDoctrine()->getManager();

        $followers = $em->getRepository('AppRestoBundle:Follower')->findAll();

        return array(
            'followers' => $followers,
        );
    }
}





