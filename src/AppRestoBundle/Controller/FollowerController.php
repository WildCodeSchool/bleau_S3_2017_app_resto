<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Follower;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\From\Extension\Core\Type\EmailType;


/**
 * Follower controller.
 *
 */
class FollowerController extends Controller
{
    public function addAction(Request $request)
    {
        $follower = new follower();

        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $follower);

        $formBuilder
            ->add('mail', EmailType::class)
            ->add('save', SummitType::class);

        $form = $formBuilder->getForm();

        if ($request->isMethod('POST'))
        {
            $form->handleRequest($request);

            if ($form->isValid())
            {

                $em = $this->getDoctrine()->getManager();
                $em->persist($follower);
                $em->flush();

                $request->getSession()_ > getFlashBag();

                return $this->redirectToRoute(????, array('id' => $follower->get()));
            }
        }

        return $this->render('AppRestoBundle:Client:client.html.twig', array(
            'form' => $form->createView(),
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
    public function deleteAction(Request $request, Follower $follower)
    {
        $form = $this->createDeleteForm($follower);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($follower);
            $em->flush($follower);
        }

        return $this->redirectToRoute('follower_index');
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
