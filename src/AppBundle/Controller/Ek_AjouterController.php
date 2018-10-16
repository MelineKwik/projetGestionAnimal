<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Admin;
use AppBundle\Entity\Ek_Animal;
use AppBundle\Repository\AnimalRepository;
use AppBundle\Entity\Ek_Famille;
use AppBundle\Entity\Ek_Traitement;
use AppBundle\Entity\Ek_Transporteur;
use AppBundle\Entity\Ek_Vaccination;
use AppBundle\Entity\Ek_Veterinaire;
use AppBundle\Entity\Ek_Visite;
use AppBundle\Form\Ek_AdminType;
use AppBundle\Form\Ek_FamilleType;
use AppBundle\Form\Ek_TraitementType;
use AppBundle\Form\Ek_TransporteurType;
use AppBundle\Form\Ek_VaccinationType;
use AppBundle\Form\Ek_VeterinaireType;
use AppBundle\Form\Ek_VisiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of Ek_AjouterController
 *
 * @author ekichenin.cdi
 */
class Ek_AjouterController extends Controller {

    /**
     * @Route("/ajoutUtilisateurAdmin", name="ajoutUtilisateurAdmin")
     */
    public function ajouterAdminAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $admin = $em->getRepository(Ek_Admin::class);
        $admin = new Ek_Admin();
        $form = $this->createForm(Ek_AdminType::class, $admin);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $em->persist($admin);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('Ek_addAdmin.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/ajoutUtilisateurFamille", name="ajoutUtilisateurFamille")
     */
    public function ajouterFamilleAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $famille = $em->getRepository(Ek_Famille::class);
        $famille = new Ek_Famille();
        $form = $this->createForm(Ek_FamilleType::class, $famille);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $em->persist($famille);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('Ek_addFamille.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/ajoutUtilisateurVeterinaire", name="ajoutUtilisateurVeterinaire")
     */
    public function ajouterVeterinaireAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $veto = $em->getRepository(Ek_Veterinaire::class);
        $veto = new Ek_Veterinaire();
        $form = $this->createForm(Ek_VeterinaireType::class, $veto);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $em->persist($veto);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('Ek_addVeterinaire.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/ajoutUtilisateurTransporteur", name="ajoutUtilisateurTransporteur")
     */
    public function ajouterTransporteurAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
        $transporteur = $em->getRepository(Ek_Transporteur::class);
        $transporteur = new Ek_Transporteur();
        $form = $this->createForm(Ek_TransporteurType::class, $transporteur);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {



            $em->persist($transporteur);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('Ek_addTransporteur.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

}
