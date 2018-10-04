<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvenementRepository")
 */
class Evenement
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
     * @ORM\Column(name="type", type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=true)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_suivante", type="date", nullable=true)
     */
    private $dateSuivante;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

      /**
     *
     * @ORM\ManyToOne(targetEntity="Animal", inversedBy="evenement")
     * @ORM\JoinColumn(name="id_animal", referencedColumnName="id")
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
     * Set type
     *
     * @param string $type
     *
     * @return Evenement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Evenement
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateSuivante
     *
     * @param \DateTime $dateSuivante
     *
     * @return Evenement
     */
    public function setDateSuivante($dateSuivante)
    {
        $this->dateSuivante = $dateSuivante;

        return $this;
    }

    /**
     * Get dateSuivante
     *
     * @return \DateTime
     */
    public function getDateSuivante()
    {
        return $this->dateSuivante;
    }

    /**
     * Set montant
     *
     * @param float $montant
     *
     * @return Evenement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }
    
    function getAnimal() {
        return $this->animal;
    }

    function setAnimal($animal) {
        $this->animal = $animal;
    }


}

