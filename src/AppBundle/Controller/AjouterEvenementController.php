<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Animal;
use AppBundle\Entity\Ek_Espece;
use AppBundle\Entity\Ek_Evenement;
use AppBundle\Form\AjoutAnimalType;
use AppBundle\Form\AjoutEvenementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AjouterEvenementController
 *
 * @author ekichenin.cdi
 */
class AjouterEvenementController extends Controller {

    /**
     * @Route("/ajoutEvenement/{id}", name="ajoutEvenement")
     * 
     */
    public function ajoutEvenement(Request $request, $id) {

        $em = $this->getDoctrine()->getManager();
        $animal = $em->getRepository(Ek_Animal::class)->find($id);
        $evenement = $em->getRepository(Ek_Evenement::class);
        $evenement = new Ek_Evenement();
        $form1 = $this->createForm(AjoutEvenementType::class, $evenement);
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {


            $evenement->setAnimal($animal);
            $em->persist($evenement);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('ajoutEvenement.html.twig', array(
                    'form1' => $form1->createView(),
        ));
    }

}
