<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Follower;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;


/**
 * Follower controller.
 *
 */
class FollowerController extends Controller
{
    public function addAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $meal = $em->getRepository('AppRestoBundle:Meal')->findAll();
        return $this->render('@AppResto/Client/follower.html.twig', array(
            'nbmenus' => 9
        ));
    }


    /**
     * Lists all follower entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $followers = $em->getRepository('AppRestoBundle:Follower')->findAll();

        return $this->render('follower/index.html.twig', array(
            'followers' => $followers,
        ));
    }

    /**
     * Creates a new follower entity.
     *
     */
    public function newAction(Request $request)
    {
        $follower = new Follower();
        $form = $this->createForm('AppRestoBundle\Form\FollowerType', $follower);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($follower);
            $em->flush($follower);

            return $this->redirectToRoute('follower_show', array('id' => $follower->getId()));
        }

        return $this->render('follower/new.html.twig', array(
            'follower' => $follower,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a follower entity.
     *
     */
    public function showAction(Follower $follower)
    {
        $deleteForm = $this->createDeleteForm($follower);

        return $this->render('follower/show.html.twig', array(
            'follower' => $follower,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing follower entity.
     *
     */
    public function editAction(Request $request, Follower $follower)
    {
        $deleteForm = $this->createDeleteForm($follower);
        $editForm = $this->createForm('AppRestoBundle\Form\FollowerType', $follower);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('follower_edit', array('id' => $follower->getId()));
        }

        return $this->render('follower/edit.html.twig', array(
            'follower' => $follower,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a follower entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $forms = $em->getRepository('AppRestoBundle:Comment')
            ->findOneById($id);

            $em->remove($forms);
            $em->flush($forms);


        return $this->redirectToRoute('app_resto_homepage');
    }

    /**
     * Creates a form to delete a follower entity.
     *
     * @param Follower $follower The follower entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Follower $follower)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('follower_delete', array('id' => $follower->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
