<?php

namespace testBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * don
 *
 * @ORM\Table(name="don")
 * @ORM\Entity(repositoryClass="testBundle\Repository\donRepository")
 */
class don
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="somme", type="string", length=255)
     */
    private $somme;


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
     * @return don
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
     * Set somme
     *
     * @param string $somme
     *
     * @return don
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;

        return $this;
    }

    /**
     * Get somme
     *
     * @return string
     */
    public function getSomme()
    {
        return $this->somme;
    }
}

