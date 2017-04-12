<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Day;
use AppRestoBundle\Entity\Meal;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Day controller.
 *
 */
class DayController extends Controller
{
    /**
     * Lists all day entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $days = $em->getRepository('AppRestoBundle:Day')->findAll();

        return $this->render('day/index.html.twig', array(
            'days' => $days,
        ));
    }

    /**
     * Creates a new day entity.
     *
     */
    public function newAction(Request $request)
    {
        $day = new Day();
        $repository = $this->getDoctrine()->getRepository('AppRestoBundle:Meal');

        $entree = $repository->findBy(array('type' => 1));
        $day->getMeals()->add($entree);

        $plat = $repository->findBy(array('type' => 2));
        $day->getMeals()->add($plat);

        $dessert = $repository->findBy(array('type' => 3));
        $day->getMeals()->add($dessert);

        $garniture = $repository->findBy(array('type' => 4));
        $day->getMeals()->add($garniture);

        $form = $this->createForm('AppRestoBundle\Form\DayType', $day);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($day);
            $em->flush($day);

            return $this->redirectToRoute('day_show', array('id' => $day->getId()));
        }

        return $this->render('day/new.html.twig', array(
            'day' => $day,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a day entity.
     *
     */
    public function showAction(Day $day)
    {
        $deleteForm = $this->createDeleteForm($day);

        return $this->render('day/show.html.twig', array(
            'day' => $day,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing day entity.
     *
     */
    public function editAction(Request $request, Day $day)
    {
        $deleteForm = $this->createDeleteForm($day);
        $editForm = $this->createForm('AppRestoBundle\Form\DayType', $day);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('day_edit', array('id' => $day->getId()));
        }

        return $this->render('day/edit.html.twig', array(
            'day' => $day,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a day entity.
     *
     */
    public function deleteAction(Request $request, Day $day)
    {
        $form = $this->createDeleteForm($day);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($day);
            $em->flush($day);
        }

        return $this->redirectToRoute('day_index');
    }

    /**
     * Creates a form to delete a day entity.
     *
     * @param Day $day The day entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Day $day)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('day_delete', array('id' => $day->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
