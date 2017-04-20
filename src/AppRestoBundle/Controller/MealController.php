<?php

namespace AppRestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class MealController extends Controller
{
    /*
     *
     */
    public function mealAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $entrees = $em->getRepository('AppRestoBundle:Entree')->findAll();
        $plats = $em->getRepository('AppRestoBundle:Plat')->findAll();
        $garnitures = $em->getRepository('AppRestoBundle:Garniture')->findAll();
        $desserts = $em->getRepository('AppRestoBundle:Dessert')->findAll();

        return $this->render('@AppResto/Admin/meal.html.twig', array(
            'entrees' => $entrees,
            'plats' => $plats,
            'garnitures' => $garnitures,
            'desserts' => $desserts,
        ));
    }

    public function deleteEntreeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entree = $em->getRepository('AppRestoBundle:Entree')->findOneById($id);
        $em->remove($entree);
        $em->flush();

        return $this->redirectToRoute('app_resto_meal');
    }

    public function deletePlatAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entree = $em->getRepository('AppRestoBundle:Plat')->findOneById($id);
        $em->remove($entree);
        $em->flush();

        return $this->redirectToRoute('app_resto_meal');
    }

    public function deleteGarnitureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entree = $em->getRepository('AppRestoBundle:Garniture')->findOneById($id);
        $em->remove($entree);
        $em->flush();

        return $this->redirectToRoute('app_resto_meal');
    }

    public function deleteDessertAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entree = $em->getRepository('AppRestoBundle:Dessert')->findOneById($id);
        $em->remove($entree);
        $em->flush();

        return $this->redirectToRoute('app_resto_meal');
    }
}