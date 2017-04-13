<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Comment;
use AppRestoBundle\Repository\FollowerRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;

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

        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository("AppRestoBundle:Week")->findAll();

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
                        'menu' => $menu
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





