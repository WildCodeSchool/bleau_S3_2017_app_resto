<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 *
 */
class CommentController extends Controller
{
    /**
     * List comment who are validate
     */
    public function indexClientAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppRestoBundle:Comment');
        $comments = $repository->findBy(
            array('valid' => '1'),
            array('id' => 'desc'),
            3
        );

        return $this->render('AppRestoBundle:Client:comment.html.twig',
            array('comments' => $comments));
    }
}
