<?php

namespace AppRestoBundle\Controller;

use AppRestoBundle\Entity\Day;
use AppRestoBundle\Entity\Dessert;
use AppRestoBundle\Entity\Entree;
use AppRestoBundle\Entity\Garniture;
use AppRestoBundle\Entity\Plat;
use AppRestoBundle\Form\DessertType;
use AppRestoBundle\Form\EntreeType;
use AppRestoBundle\Form\GarnitureType;
use AppRestoBundle\Form\PlatType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /*
     * Load week by dateStartWeek
     * persist Week by dateStartWeek
     */
    public function loadWeekAjaxAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $weeks = $em->getRepository('AppRestoBundle:Week')->getWeekAdmin();

        ///// Create entree
        $entree = new Entree();
        $formEntree = $this->createForm(EntreeType::class, $entree);

        ///// Create Plat
        $plat = new Plat();
        $formPlat = $this->createForm(PlatType::class, $plat);

        ///// Create Garniture
        $garniture = new Garniture();
        $formGarniture = $this->createForm(GarnitureType::class, $garniture);

        ///// Create Dessert
        $dessert = new Dessert();
        $formDessert = $this->createForm(DessertType::class, $dessert);

        if($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $weekStart = $request->get('selectedWeek');

            if ($weekStart){
                $week = $em->getRepository('AppRestoBundle:Week')->findOneBy(array(
                    'start_week' => new \DateTime($weekStart)
                ));
            }
            else{
                $today = new \DateTime("today");
                $deadLine = new \DateTime("thursday");
                $deadLine->modify("+12 hours");

                $monday = new \DateTime("monday");
                $mondaySt = $monday->format('D');
                $todaySt = $today->format('D');

                if ($todaySt == $mondaySt)
                {
                    $weekStart = $monday;
                }
                elseif ($today > $deadLine) {
                    $weekStart = new \DateTime("next Monday");
                }
                elseif ($today < $deadLine) {
                    $weekStart = new \DateTime("last Monday");
                }

                $week = $em->getRepository('AppRestoBundle:Week')->findOneBy(array(
                    'start_week' => $weekStart,
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
                    $content["msg"] =  "Menu enregistré";
                }
                else{
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
            'weeks' => $weeks,
            'formEntree' => $formEntree->createView(),
            'formPlat' => $formPlat->createView(),
            'formGarniture' => $formGarniture->createView(),
            'formDessert' => $formDessert->createView(),
        ));
    }

    /*
     * persist new meal
     */
    private function persistMealAction($request, $object, $formtype, $type){

        if($request->isXmlHttpRequest()) // pour vérifier la présence d'une requete Ajax
        {
            $value = $object;
            $form = $this->createForm($formtype, $value);
            $form->handleRequest($request);

            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($value);
                $em->flush();

                $response = new JsonResponse(array(
                    'msg' => $type . ' ajouté',
                    'id' => $value->getId(),
                    'name' => $value->getName()
                ));
            }
            else{
                $response = new JsonResponse(array(
                    'msg' => 'Erreur de saisi',
                ));
            }

            return $response;
        }
    }

    /*
     * Add entree
     */
    public function addEntreeAction(Request $request){
        return $this->persistMealAction($request, new Entree(), EntreeType::class, 'Entrée');
    }

    /*
     * Add plat
     */
    public function addPlatAction(Request $request){
        return $this->persistMealAction($request, new Plat(), PlatType::class, 'Plat');
    }

    /*
     * Add garniture
     */
    public function addGarnitureAction(Request $request){
        return $this->persistMealAction($request, new Garniture(), GarnitureType::class, 'Garniture');
    }

    /*
     * Add dessert
     */
    public function addDessertAction(Request $request){
        return $this->persistMealAction($request, new Dessert(), DessertType::class, 'Dessert');
    }

    public function counterAction()
    {
        $em = $this->getDoctrine()->getManager();

        $comments = $em->getRepository('AppRestoBundle:Comment')
            ->findBy(
                array('valid' => null),
                array('id' => 'desc')
            );


        $today = new \DateTime("today");
        $deadLine = new \DateTime("thursday");
        $deadLine->modify("+12 hours");

        $monday = new \DateTime("monday");
        $mondaySt = $monday->format('D');
        $todaySt = $today->format('D');

        if ($todaySt == $mondaySt)
        {
            $weekStart = $monday;
        }
        elseif ($today > $deadLine) {
            $weekStart = new \DateTime("next Monday");
        }
        elseif ($today < $deadLine) {
            $weekStart = new \DateTime("last Monday");
        }

        $todayTime = new \DateTime("Today");

        $weeks = $em->getRepository('AppRestoBundle:Week')->findOneBy(array(
            'start_week' => $weekStart
        ));

        $today = $em->getRepository('AppRestoBundle:Day')->findOneBy(array(
            'date' => $todayTime
        ));

        $resaToday = $today->getResas();

        $days = $weeks->getDays();

        foreach ($days as $day) {
            $resas [] = $day->getResas();
        }

        return $this->render('AppRestoBundle:Admin:counter.html.twig', array(
            'comments' => $comments,
            'resas' => $resas,
            'resaToday' => $resaToday,
        ));
    }

    /*
     * Valid Commentary
     */
    public function validAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $comment = $em->getRepository('AppRestoBundle:Comment')
            ->findOneById($id);

        $comment->setValid('1');
        $em->flush();

        return $this->redirectToRoute('app_resto_admin_counter');
    }

    /*
     * Archiv Commentary
     */
    public function archivAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $comments = $em->getRepository('AppRestoBundle:Comment')
            ->findOneById($id);
        $comments->setValid('0');
        $em->flush();

        return $this->redirectToRoute('app_resto_admin_counter');
    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $follower = $em->getRepository('AppRestoBundle:Follower')->findOneById($id);
        $em->remove($follower);
        $em->flush($follower);

        return $this->redirectToRoute('app_resto_homepage');
    }

}





