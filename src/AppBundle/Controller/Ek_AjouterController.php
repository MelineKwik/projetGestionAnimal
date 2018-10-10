<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Admin;
use AppBundle\Entity\Ek_Animal;
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
     * @Route("/ajoutVisite/{id}", name="ajoutVisite")
     */
    public function ajouterVisite(Request $request, $id){
        
        $em = $this -> getDoctrine()->getManager();
        $animal = $em->getRepository(Ek_Animal::class)->find($id);
        $visite = $em->getRepository(Ek_Visite::class);
        $visite = new Ek_Visite();
        $form1 = $this -> createForm(Ek_VisiteType::class,$visite);
        $form1->handleRequest($request);
       if ($form1->isSubmitted() && $form1->isValid()) {
             
         
            $visite->setAnimal($animal);
            $em->persist($visite);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addVisite.html.twig', array(
             'form1' =>$form1->createView(),
             
           
        ));
    }
    
     /**
     * @Route("/ajoutTraitement/{id}", name="ajoutTraitement")
     */
    public function ajouterTraitementAction(Request $request, $id){
        
        $em = $this -> getDoctrine()->getManager();
        $animal = $em->getRepository(Ek_Animal::class)->find($id);
        $traitement = $em->getRepository(Ek_Traitement::class);
        $traitement = new Ek_Traitement();
        $form2 = $this -> createForm(Ek_TraitementType::class,$traitement);
        $form2->handleRequest($request);
       if ($form2->isSubmitted() && $form2->isValid()) {
             
         
            $traitement->setAnimal($animal);
            $em->persist($traitement);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addTraitement.html.twig', array(
             'form2' =>$form2->createView(),
             
           
        ));
    }
    
    /**
     * @Route("/ajoutVaccination/{id}", name="ajoutVaccination")
     */
    public function ajouterVaccinationAction(Request $request, $id){
        
        $em = $this -> getDoctrine()->getManager();
        $animal = $em->getRepository(Ek_Animal::class)->find($id);
        $vaccin = $em->getRepository(Ek_Vaccination::class);
        $vaccin = new Ek_Vaccination();
        $form3 = $this -> createForm(Ek_VaccinationType::class,$vaccin);
        $form3->handleRequest($request);
       if ($form3->isSubmitted() && $form3->isValid()) {
             
         
            $vaccin->setAnimal($animal);
            $em->persist($vaccin);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addVaccination.html.twig', array(
             'form3' =>$form3->createView(),
             
           
        ));
    }
    
    /**
     * @Route("/ajoutUtilisateurAdmin", name="ajoutUtilisateurAdmin")
     */
    public function ajouterAdminAction(Request $request){
        
        $em = $this -> getDoctrine()->getManager();
        $admin = $em->getRepository(Ek_Admin::class);
        $admin = new Ek_Admin();
        $form = $this -> createForm(Ek_AdminType::class,$admin);
        $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
             
         
           
            $em->persist($admin);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addAdmin.html.twig', array(
             'form' =>$form->createView(),
             
           
        ));
    }
    
    /**
     * @Route("/ajoutUtilisateurFamille", name="ajoutUtilisateurFamille")
     */
    public function ajouterFamilleAction(Request $request){
        
        $em = $this -> getDoctrine()->getManager();
        $famille = $em->getRepository(Ek_Famille::class);
        $famille = new Ek_Famille();
        $form = $this -> createForm(Ek_FamilleType::class,$famille);
        $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
             
         
           
            $em->persist($famille);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addFamille.html.twig', array(
             'form' =>$form->createView(),
             
           
        ));
    }
    
    /**
     * @Route("/ajoutUtilisateurVeterinaire", name="ajoutUtilisateurVeterinaire")
     */
    public function ajouterVeterinaireAction(Request $request){
        
        $em = $this -> getDoctrine()->getManager();
        $veto = $em->getRepository(Ek_Veterinaire::class);
        $veto = new Ek_Veterinaire();
        $form = $this -> createForm(Ek_VeterinaireType::class,$veto);
        $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
             
         
           
            $em->persist($veto);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addVeterinaire.html.twig', array(
             'form' =>$form->createView(),
             
           
        ));
    }
    
    /**
     * @Route("/ajoutUtilisateurTransporteur", name="ajoutUtilisateurTransporteur")
     */
    public function ajouterTransporteurAction(Request $request){
        
        $em = $this -> getDoctrine()->getManager();
        $transporteur = $em->getRepository(Ek_Transporteur::class);
        $transporteur = new Ek_Transporteur();
        $form = $this -> createForm(Ek_TransporteurType::class,$transporteur);
        $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
             
         
           
            $em->persist($transporteur);
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
       return $this->render('Ek_addTransporteur.html.twig', array(
             'form' =>$form->createView(),
             
           
        ));
    }
}
