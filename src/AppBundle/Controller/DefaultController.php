<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Animal;
use AppBundle\Entity\Espece;
use AppBundle\Form\AjoutAnimalType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




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
       $repositoryAnimaux= $em ->getRepository(Animal::class);  
       $repositoryEspece= $em ->getRepository(Espece::class);
      
       
      $afficheQuery = $em->createQuery(
            'SELECT a.id, a.nom, a.robe, a.poid,a.image, a.numeroPuce, e.libelle, a.dateNaissance
            FROM AppBundle:Animal a INNER JOIN AppBundle:Espece e WITH a.espece = e.id
            ' );
       $afficheAnimal = $afficheQuery->getResult();
       
       
       $user = $this->getUser();
       $animal = new Animal();
       $form = $this -> createForm(AjoutAnimalType::class,$animal);
       $form->handleRequest($request);
       
       if ($form->isSubmitted() && $form->isValid()) {
             
           $file =  $animal->getImage();
           $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
           $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );
            $animal->setImage($fileName);
            $animal->setIdUtilisateurPro($user);
            $em = $this -> getDoctrine()->getManager();
         
            $em->persist($animal);
     
            $em->flush();
           
        return $this->redirectToRoute('accueil');
     
       }
       
      
       
         return $this->render('accueilAdmin.html.twig', array(
             'animaux' =>$afficheAnimal,
             'form' => $form->createView(),
         
           
        ));
    }
    private function generateUniqueFileName()
    {
        return md5(uniqid());
    }
    
       /**
     * @Route("/modifierAnimaux/{id}", name="modifierAnimaux")
     */
    public function afficheAnimaux(Request $request, $id){
       $em = $this -> getDoctrine()->getManager();
        $animaux = $em->getRepository(Animal::class)->find($id);
       $animal = new Animal();
       $form = $this -> createForm(AjoutAnimalType::class,$animaux);
       
       
  
     
    

       
      
        
       return $this->redirectToRoute('accueil', array(
             'form' =>$form->createView(),
             
           
        ));
    }
}
