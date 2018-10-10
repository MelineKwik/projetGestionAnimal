<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Traitement
 *
 * @ORM\Table(name="Ek_traitement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TraitementRepository")
 */
class Ek_Traitement extends Ek_Evenement
{
   /**
     * 
     *
     * @ORM\Column(name="symptome", type="text", length=255, nullable=true)
     */
    private $symptome;
    /**
     * 
     *
     * @ORM\Column(name="maladie", type="string", length=255, nullable=true)
     */
    private $maladie;
    
    /**
     * 
     *
     * @ORM\Column(name="traitement", type="text", length=255, nullable=true)
     */
    private $traitement;
    
    function getSymptome() {
        return $this->symptome;
    }

    function getMaladie() {
        return $this->maladie;
    }

    function getTraitement() {
        return $this->traitement;
    }

    function setSymptome($symptome) {
        $this->symptome = $symptome;
    }

    function setMaladie($maladie) {
        $this->maladie = $maladie;
    }

    function setTraitement($traitement) {
        $this->traitement = $traitement;
    }




}

