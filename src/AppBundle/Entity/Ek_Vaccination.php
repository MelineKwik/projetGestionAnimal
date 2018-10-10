<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vaccination
 *
 * @ORM\Table(name="Ek_vaccination")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VaccinationRepository")
 */
class Ek_Vaccination extends Ek_Evenement
{
     /**
     * @var string
     *
     * @ORM\Column(name="produit", type="string", length=255, nullable=true)
     */
    private $produit;
    
    function getProduit() {
        return $this->produit;
    }

    function setProduit($produit) {
        $this->produit = $produit;
    }


}

