<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Animal
 *
 * @ORM\Table(name="animal")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AnimalRepository")
 */
class Animal
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
     * @ORM\Column(name="nom", type="string", length=50, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="robe", type="string", length=90, nullable=true)
     */
    private $robe;

    /**
     * @var float
     *
     * @ORM\Column(name="poid", type="float", nullable=true)
     */
    private $poid;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_puce", type="string", length=50, nullable=true)
     */
    private $numeroPuce;

     /**
     * @ORM\OneToMany(targetEntity="Espece", mappedBy="espece")
     */
    private $espece;
    
     /**
     * @ORM\OneToMany(targetEntity="Evenement", mappedBy="evenement")
     */
    private $evenement;
    
     /**
     *
     * @ORM\ManyToOne(targetEntity="Personne", inversedBy="animal")
     * @ORM\JoinColumn(name="utilisateur_id_proprietaire", referencedColumnName="id")
     */
    private $idUtilisateurPro;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="Image", inversedBy="image")
     * @ORM\JoinColumn(name="num_image", referencedColumnName="id")
     */
    private $image;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Animal
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set robe
     *
     * @param string $robe
     *
     * @return Animal
     */
    public function setRobe($robe)
    {
        $this->robe = $robe;

        return $this;
    }

    /**
     * Get robe
     *
     * @return string
     */
    public function getRobe()
    {
        return $this->robe;
    }

    /**
     * Set poid
     *
     * @param float $poid
     *
     * @return Animal
     */
    public function setPoid($poid)
    {
        $this->poid = $poid;

        return $this;
    }

    /**
     * Get poid
     *
     * @return float
     */
    public function getPoid()
    {
        return $this->poid;
    }

    /**
     * Set numeroPuce
     *
     * @param string $numeroPuce
     *
     * @return Animal
     */
    public function setNumeroPuce($numeroPuce)
    {
        $this->numeroPuce = $numeroPuce;

        return $this;
    }

    /**
     * Get numeroPuce
     *
     * @return string
     */
    public function getNumeroPuce()
    {
        return $this->numeroPuce;
    }
    
    function getEspece() {
        return $this->espece;
    }

    function setEspece($espece) {
        $this->espece = $espece;
    }

    function getEvenement() {
        return $this->evenement;
    }

    function setEvenement($evenement) {
        $this->evenement = $evenement;
    }

    function getIdUtilisateurPro() {
        return $this->idUtilisateurPro;
    }

    function setIdUtilisateurPro($idUtilisateurPro) {
        $this->idUtilisateurPro = $idUtilisateurPro;
    }
    
    function getImage() {
        return $this->image;
    }

    function setImage($image) {
        $this->image = $image;
    }






}

