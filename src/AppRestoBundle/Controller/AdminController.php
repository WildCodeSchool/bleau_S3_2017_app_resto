<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

class AdminController extends Controller
{
    public function adminAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppRestoBundle:Week');
        $weekStart = new \DateTime("last Monday");
        $week = $repository->findOneBy(array(
            'start_week' => $weekStart
        ));

        $lundi = new Day();
        $lundi->setDate($weekStart);
        $week->getDays()->add($lundi);

        $mardi = new Day();
        //$mardi->setDate('');
        $week->getDays()->add($mardi);

        $mercredi = new Day();
        //$mercredi->setDate('');
        $week->getDays()->add($mercredi);

        $jeudi = new Day();
        //$jeudi->setDate('');
        $week->getDays()->add($jeudi);

        $vendredi = new Day();
        //$vendredi->setDate('');
        $week->getDays()->add($vendredi);

        $form = $this->createForm('AppRestoBundle\Form\WeekType', $week);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($week);
            $em->flush($week);

            return $this->redirectToRoute('week_show', array('id' => $week->getId()));
        }

        return $this->render('week/new.html.twig', array(
            'week' => $week,
            'form' => $form->createView(),
        ));



    // BEFORE THE MESS


        $days = ['','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi'];
        $types = ['Plat', 'Garniture', 'Entrée', 'Dessert'];

        return $this->render('AppRestoBundle:Admin:admin.html.twig',
            array ('days' => $days, 'types' => $types )
            );

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
}





