<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Day;
use AppRestoBundle\Entity\Week;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppRestoBundle\Repository\WeekRepository;

/**
 * Week controller.
 *
 */
class WeekController extends Controller
{
    /**
     * Lists all week entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $weeks = $em->getRepository('AppRestoBundle:Week')->findAll();

        return $this->render('week/index.html.twig', array(
            'weeks' => $weeks,
        ));
    }

    /**
     * Creates a new week entity.
     *
     */
    public function newAction(Request $request)
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('AppRestoBundle:Week');
        $weekStart = new \DateTime("last Monday");
        $week = $repository->findOneBy(array(
            'start_week' => $weekStart
        ));
        $lundi = new Day();
        $lundi->setDate($weekStart);
        $week->getDays()->add($lundi);

        $mardi = new Day();
        $mardi->setDate($weekStart)->getDate()->modify('+1 day');
        $week->getDays()->add($mardi);

        $mercredi = new Day();
        $mardi->setDate($weekStart)->getDate()->modify('+2 day');
        $week->getDays()->add($mercredi);

        $jeudi = new Day();
        $mardi->setDate($weekStart)->getDate()->modify('+3 day');
        $week->getDays()->add($jeudi);

        $vendredi = new Day();
        $mardi->setDate($weekStart)->getDate()->modify('+4 day');
        $week->getDays()->add($vendredi);

        $form = $this->createForm('AppRestoBundle\Form\WeekType', $week);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush($week);

            return $this->redirectToRoute('week_show', array('id' => $week->getId()));
        }

        return $this->render('week/new.html.twig', array(
            'week' => $week,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a week entity.
     *
     */
    public function showAction(Week $week)
    {
        $deleteForm = $this->createDeleteForm($week);

        return $this->render('week/show.html.twig', array(
            'week' => $week,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing week entity.
     *
     */
    public function editAction(Request $request, Week $week)
    {
        $deleteForm = $this->createDeleteForm($week);
        $editForm = $this->createForm('AppRestoBundle\Form\WeekType', $week);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('week_edit', array('id' => $week->getId()));
        }

        return $this->render('week/edit.html.twig', array(
            'week' => $week,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a week entity.
     *
     */
    public function deleteAction(Request $request, Week $week)
    {
        $form = $this->createDeleteForm($week);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($week);
            $em->flush($week);
        }

        return $this->redirectToRoute('week_index');
    }

    /**
     * Creates a form to delete a week entity.
     *
     * @param Week $week The week entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Week $week)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('week_delete', array('id' => $week->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
