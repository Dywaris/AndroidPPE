<?php

namespace Epsi\FirstBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * listeMot
 *
 * @ORM\Table(name="liste_mot")
 * @ORM\Entity(repositoryClass="Epsi\FirstBundle\Repository\listeMotRepository")
 */
class listeMot
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
     * @ORM\Column(name="Libelle", type="string", length=50)
     */
    private $libelle;
    
    /**
     * @ORM\ManyToOne(targetEntity="Epsi\FirstBundle\Entity\Theme")
     * @ORM\JoinColumn(nullable=false)
     */
    private $theme;
    
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
     * @return listeMot
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
}

