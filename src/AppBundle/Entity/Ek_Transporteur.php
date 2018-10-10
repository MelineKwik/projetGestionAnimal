<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Transporteur
 *
 * @ORM\Table(name="Ek_transporteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransporteurRepository")
 */
class Ek_Transporteur extends Ek_Personne
{
  
      /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDepart", type="date", nullable=true)
     */
    private $dateDepart;
    
      /**
     * @var string
     *
     * @ORM\Column(name="specificiter", type="string", length=255, nullable=true)
     */
    private $specificiter;
    
    

    
    function getSpecificiter() {
        return $this->specificiter;
    }

 

    function setSpecificiter($specificiter) {
        $this->specificiter = $specificiter;
    }

    function getDateDepart(){
        return $this->dateDepart;
    }

    function setDateDepart( $dateDepart) {
        $this->dateDepart = $dateDepart;
    }



}

