<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Admin;
use AppBundle\Entity\Ek_Animal;
use AppBundle\Entity\Ek_Espece;
use AppBundle\Entity\Ek_Famille;
use AppBundle\Entity\Ek_Personne;
use AppBundle\Entity\Ek_Traitement;
use AppBundle\Entity\Ek_Transporteur;
use AppBundle\Entity\Ek_Vaccination;
use AppBundle\Entity\Ek_Veterinaire;
use AppBundle\Entity\Ek_Visite;
use AppBundle\Form\AjoutMembreType;
use AppBundle\Form\Ek_AdminType;
use AppBundle\Form\Ek_AnimalType;
use AppBundle\Form\Ek_FamilleType;
use AppBundle\Form\Ek_TraitementType;
use AppBundle\Form\Ek_TransporteurType;
use AppBundle\Form\Ek_VaccinationType;
use AppBundle\Form\Ek_VeterinaireType;
use AppBundle\Form\Ek_VisiteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Description of Ek_AffichageController
 *
 * @author ekichenin.cdi
 */
class Ek_AffichageController extends Controller {

    /**
     * @Route("/", name="dashboard")
     * 
     */
    public function dashboardAction(Request $request) {
        return $this->render('Ek_Dashboard.html.twig', array(
        ));
    }

    /**
     * @Route("/listeIntervenant", name="listeIntervenant")
     */
    public function listeIntervenantAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repositoryPersonne = $em->getRepository(Ek_Personne::class);


        $personnes = $repositoryPersonne->findAll();

        $admin = $em->getRepository(Ek_Admin::class);
        $admin = new Ek_Admin();
        $form = $this->createForm(Ek_AdminType::class, $admin);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($admin);
            $em->flush();
            return $this->redirectToRoute('listeIntervenant');
        }

        $famille = $em->getRepository(Ek_Famille::class);
        $famille = new Ek_Famille();
        $form1 = $this->createForm(Ek_FamilleType::class, $famille);
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {
            $em->persist($famille);
            $em->flush();
            return $this->redirectToRoute('listeIntervenant');
        }

        $veto = $em->getRepository(Ek_Veterinaire::class);
        $veto = new Ek_Veterinaire();
        $form2 = $this->createForm(Ek_VeterinaireType::class, $veto);
        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {

            $em->persist($veto);
            $em->flush();

            return $this->redirectToRoute('listeIntervenant');
        }

        $transporteur = $em->getRepository(Ek_Transporteur::class);
        $transporteur = new Ek_Transporteur();
        $form3 = $this->createForm(Ek_TransporteurType::class, $transporteur);
        $form3->handleRequest($request);
        if ($form3->isSubmitted() && $form3->isValid()) {

            $em->persist($transporteur);
            $em->flush();

            return $this->redirectToRoute('listeIntervenant');
        }

        return $this->render('Ek_VueIntervenant.html.twig', array(
                    'personnes' => $personnes,
                    'form' => $form->createView(),
                    'form1' => $form1->createView(),
                    'form2' => $form2->createView(),
                    'form3' => $form3->createView(),
        ));
    }

    /**
     * @Route("/listeAnimaux", name="listeAnimaux")
     */
    public function listeAnimauxAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repositoryAnimaux = $em->getRepository(Ek_Animal::class);
        $repositoryEspece = $em->getRepository(Ek_Espece::class);
        $repositoryPersonne = $em->getRepository(Ek_Personne::class);

        $Personnes = $repositoryPersonne->findAll();
        $afficheQuery = $em->createQuery(
                'SELECT a.id, a.nom, a.robe, a.poid,a.image, a.numeroPuce, e.libelle, a.dateNaissance
            FROM AppBundle:Ek_Animal a INNER JOIN AppBundle:Ek_Espece e WITH a.espece = e.id
            ');
        $afficheAnimal = $afficheQuery->getResult();



        $animal = new Ek_Animal();

        $form = $this->createForm(Ek_AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $file = $animal->getImage();
            $fileName = $this->generateUniqueFileName() . '.' . $file->guessExtension();
            $file->move(
                    $this->getParameter('image_directory'), $fileName
            );
            $animal->setImage($fileName);



            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();
            $idanimal = $animal->getId();

            return $this->redirectToRoute('listeAnimaux');
        }

        $filtre = $this->createForm(AjoutMembreType::class);
        $filtre->handleRequest($request);
        if ($form->isSubmitted() && $filtre->isValid()) {
            
        }


        return $this->render('Ek_VueAnimaux.html.twig', array(
                    'animaux' => $afficheAnimal,
                    'form' => $form->createView(),
                    'personnes' => $Personnes,
                    'filtre' => $filtre->createView(),
        ));
    }

    private function generateUniqueFileName() {
        return md5(uniqid());
    }

    /**
     * @Route("/formulaire/{id}", name="formulaire")
     */
    public function formulaireAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        $animal = $em->getRepository(Ek_Animal::class)->find($id);

        $visite = $em->getRepository(Ek_Visite::class);
        $visite = new Ek_Visite();
        $form1 = $this->createForm(Ek_VisiteType::class, $visite);
        $form1->handleRequest($request);
        if ($form1->isSubmitted() && $form1->isValid()) {

            $animal->setPoid($visite->getPoid());
            $em->flush();
            $visite->setAnimal($animal);
            $em->persist($visite);

            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        $traitement = $em->getRepository(Ek_Traitement::class);
        $traitement = new Ek_Traitement();
        $form2 = $this->createForm(Ek_TraitementType::class, $traitement);
        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {


            $traitement->setAnimal($animal);
            $em->persist($traitement);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        $vaccin = $em->getRepository(Ek_Vaccination::class);
        $vaccin = new Ek_Vaccination();
        $form3 = $this->createForm(Ek_VaccinationType::class, $vaccin);
        $form3->handleRequest($request);
        if ($form3->isSubmitted() && $form3->isValid()) {


            $vaccin->setAnimal($animal);
            $em->persist($vaccin);
            $em->flush();

            return $this->redirectToRoute('accueil');
        }

        return $this->render('formulaireEvenement.html.twig', array(
                    'form1' => $form1->createView(),
                    'form2' => $form2->createView(),
                    'form3' => $form3->createView(),
        ));
    }

    //liste Animaux qui est recueilli par la famille connecté 
    /**
     * @Route("/listeAnimauxFamille", name="listeAnimauxFamille")
     */
    public function listeAnimauxFamilleAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $repositoryAnimaux = $em->getRepository(Ek_Animal::class);
        $repositoryEspece = $em->getRepository(Ek_Espece::class);
        $repositoryPersonne = $em->getRepository(Ek_Personne::class);

        $user = $this->getUser();
        $afficheQuery = $em->createQuery(
                'SELECT a.id, a.nom, a.robe, a.poid,a.image, a.numeroPuce, e.libelle, a.dateNaissance
            FROM AppBundle:Ek_Animal a INNER JOIN AppBundle:Ek_Espece e WITH a.espece = e.id WHERE a.idUtilisateurPro = :idCo ');
        $afficheQuery->setParameters(array(
            'idCo' => $user,
        ));
        $afficheAnimal = $afficheQuery->getResult();

        return $this->render('Ek_VueAnimaux.html.twig', array(
                    'animaux' => $afficheAnimal,
        ));
    }
    
        /**
     * @Route("/agenda", name="agenda")
     */
    public function agendaAction(Request $request) {
        return $this->render('Ek_agenda.html.twig', array(
                    
        ));
    }

}
