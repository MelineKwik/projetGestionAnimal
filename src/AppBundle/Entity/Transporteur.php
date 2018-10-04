<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Transporteur
 *
 * @ORM\Table(name="transporteur")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TransporteurRepository")
 */
class Transporteur extends Personne
{
      /**
     * @var string
     *
     * @ORM\Column(name="specificiter", type="string", length=255, nullable=true)
     */
    private $specificiter;
}

