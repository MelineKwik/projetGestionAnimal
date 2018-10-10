<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Espece
 *
 * @ORM\Table(name="Ek_espece")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EspeceRepository")
 */
class Ek_Espece
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;
    
     /**
     * @ORM\OneToMany(targetEntity="Ek_Animal", mappedBy="espece")
     */
    private $animal;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Espece
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    
    function getAnimal() {
        return $this->animal;
    }

    function setAnimal($animal) {
        $this->animal = $animal;
    }


}

