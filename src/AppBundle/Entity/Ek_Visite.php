<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Visite
 *
 * @ORM\Table(name="Ek_visite")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VisiteRepository")
 */
class Ek_Visite extends Ek_Evenement
{
       /**
     * 
     *
     * @ORM\Column(name="bilan", type="text", length=255, nullable=true)
     */
    private $bilan;
       /**
     * 
     *
     * @ORM\Column(name="poid", type="integer", nullable=true)
     */
    private $poid;
    
    function getBilan() {
        return $this->bilan;
    }

    function setBilan($bilan) {
        $this->bilan = $bilan;
    }

    function getPoid() {
        return $this->poid;
    }

    function setPoid($poid) {
        $this->poid = $poid;
    }





}

