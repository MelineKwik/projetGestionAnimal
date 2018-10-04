<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Animal;
use AppBundle\Form\AjoutAnimalType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


/**
 * Description of AffichageController
 *
 * @author ekichenin.cdi
 */
class ModifierController extends Controller {
    /**
     * @Route("/modifierAnimaux/{id}", name="modifierAnimaux")
     */
    public function afficheAnimaux(Request $request, $id){
       $em = $this -> getDoctrine()->getManager();
        $animaux = $em->getRepository(Animal::class)->find($id);
       $animal = new Animal();
       $form = $this -> createForm(AjoutAnimalType::class,$animaux);
       dump($form);
       
  
     
    

       
      
        
       return $this->render('modifierAnimal.html.twig', array(
             'form' =>$form->createView(),
             
           
        ));
    }
}
