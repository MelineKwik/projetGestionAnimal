<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="Ek_evenement")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EvenementRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="nature", type="string")
 * @ORM\DiscriminatorMap({"evenement" = "Ek_Evenement","vaccination" = "Ek_Vaccination", "traitement" = "Ek_Traitement", "visite" = "Ek_Visite"})
 */
class Ek_Evenement
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
     * @ORM\ManyToOne(targetEntity="Ek_Animal", inversedBy="evenement")
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

