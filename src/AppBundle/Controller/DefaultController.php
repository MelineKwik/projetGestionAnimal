<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Ek_Animal;
use AppBundle\Entity\Ek_Espece;
use AppBundle\Entity\Ek_Personne;
use AppBundle\Form\AjoutAnimalType;
use AppBundle\Form\AjoutMembreType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function dump;




class DefaultController extends Controller
{
 
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
    
    /**
     * @Route("/admin")
     */
    public function adminAction()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }
    
      /**
     * @Route("/", name="accueil")
     */
    public function accueilAction(Request $request)
    {
       $em = $this -> getDoctrine()->getManager();
       $repositoryAnimaux= $em ->getRepository(Ek_Animal::class);  
       $repositoryEspece= $em ->getRepository(Ek_Espece::class);
       $repositoryPersonne= $em ->getRepository(Ek_Personne::class);
      
       $Personnes= $repositoryPersonne->findAll();
       $afficheQuery = $em->createQuery(
            'SELECT a.id, a.nom, a.robe, a.poid,a.image, a.numeroPuce, e.libelle, a.dateNaissance
            FROM AppBundle:Ek_Animal a INNER JOIN AppBundle:Ek_Espece e WITH a.espece = e.id
            ' );
       $afficheAnimal = $afficheQuery->getResult();
       
       
      
       $animal = new Ek_Animal();
      
       $form = $this -> createForm(AjoutAnimalType::class,$animal);
       $form->handleRequest($request);
       
       if ($form->isSubmitted() && $form->isValid()) 
        {
             
           $file =  $animal->getImage();
           $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
           $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );
            $animal->setImage($fileName);
            
            
            
            $em = $this -> getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();
            $idanimal = $animal->getId();
           
            return $this->redirectToRoute('accueil');
     
        }
        
       $filtre = $this -> createForm(AjoutMembreType::class);
       $filtre->handleRequest($request);
       
       $compteVeterinaire = $em->createQuery(
            'SELECT COUNT(p.id) AS nb
            FROM AppBundle:Ek_Veterinaire p ');
       /*$compteVeterinaire->setParameters(array(
           'v' => "veterinaire",
        )); */
   
       $afficheCompteV=$compteVeterinaire->getResult();
       dump($afficheCompteV);
        
        if(in_array('ROLE_ADMIN', $this->getUser()->getRoles())){
            return $this->render('Ek_Dashboard.html.twig', array(
                'nombreVeterinaire' => $afficheCompteV,
         ));
        }elseif(in_array('ROLE_FAMILLE', $this->getUser()->getRoles())){
            return $this->render('Ek_DashboardFamille.html.twig', array(
         ));
        }else{
             return $this->render('Ek_Dashboard.html.twig', array(
             'animaux' =>$afficheAnimal,
             'form' => $form->createView(),
             'personnes' => $Personnes,
             'filtre' => $filtre->createView(),
            ));
        }
    
             
         
           
        
     
       }
     private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
    
    
    
        
}
