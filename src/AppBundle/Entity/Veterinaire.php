<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Veterinaire
 *
 * @ORM\Table(name="veterinaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\VeterinaireRepository")
 */
class Veterinaire extends Personne
{
   
}

