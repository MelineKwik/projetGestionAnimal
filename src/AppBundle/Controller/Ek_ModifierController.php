<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Animal;
use AppBundle\Form\AjoutAnimalType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use function dump;

/**
 * Description of Ek_ModifierController
 *
 * @author ekichenin.cdi
 */
class Ek_ModifierController extends Controller{
    /**
     * @Route("/modifierAnimaux/{id}", name="modifierAnimaux")
     */
    public function modifierAnimauxAction(Request $request, $id){
       $em = $this -> getDoctrine()->getManager();
        $animaux = $em->getRepository(Ek_Animal::class)->find($id);
        
        if(!$animaux){
            throw $this->createNotFoundException('existe pas'); 
            
        }
        $user = $this->getUser();
        $form =$this -> createForm(AjoutAnimalType::class,$animaux);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
           $file =  $animaux->getImage();
           $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
           $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );
            $animaux->setImage($fileName);
            $animaux->setIdUtilisateurPro($user);
            $em = $this -> getDoctrine()->getManager();
            $em->persist($animaux);
            $em->flush();
 
            return $this->redirect($this->generateUrl('accueil'));
        }
        return $this->render('Ek_modifiedAnimaux.html.twig', array(
             'form' =>$form->createView(),
        ));
    }
    
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
}
