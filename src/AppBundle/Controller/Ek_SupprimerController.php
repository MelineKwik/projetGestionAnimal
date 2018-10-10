<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Personne;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * Description of Ek_SupprimerController
 *
 * @author ekichenin.cdi
 */
class Ek_SupprimerController extends Controller{
    /**
     * @Route("/supprimerUtilisateur/{id}", name="supprimerUtilisateur")
     */
    public function supprimerUtilisateurAction(Request $request, $id){
        
        $em = $this -> getDoctrine()->getManager();
        $user = $em->getRepository(Ek_Personne::class)->find($id);
        $em->remove($user);
        $em->flush();
       
      return $this->redirectToRoute('listeIntervenant');
    }
}
