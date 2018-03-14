<?php

namespace GSB\PraticienBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * praticien
 *
 * @ORM\Table(name="praticien")
 * @ORM\Entity(repositoryClass="GSB\PraticienBundle\Repository\praticienRepository")
 */
class praticien
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
     * @ORM\Column(name="Pra_Nom", type="string", length=255, nullable=true)
     */
    private $praNom;

    /**
     * @var string
     *
     * @ORM\Column(name="Pra_Adresse", type="string", length=255, nullable=true)
     */
    private $praAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="Pra_CP", type="string", length=255, nullable=true)
     */
    private $praCP;

    /**
     * @var string
     *
     * @ORM\Column(name="Pra_Ville", type="string", length=255, nullable=true)
     */
    private $praVille;

    /**
     * @var int
     *
     * @ORM\Column(name="Coefnotoriete", type="integer", nullable=true)
     */
    private $coefnotoriete;


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
     * Set praNom
     *
     * @param string $praNom
     *
     * @return praticien
     */
    public function setPraNom($praNom)
    {
        $this->praNom = $praNom;

        return $this;
    }

    /**
     * Get praNom
     *
     * @return string
     */
    public function getPraNom()
    {
        return $this->praNom;
    }

    /**
     * Set praAdresse
     *
     * @param string $praAdresse
     *
     * @return praticien
     */
    public function setPraAdresse($praAdresse)
    {
        $this->praAdresse = $praAdresse;

        return $this;
    }

    /**
     * Get praAdresse
     *
     * @return string
     */
    public function getPraAdresse()
    {
        return $this->praAdresse;
    }

    /**
     * Set praCP
     *
     * @param string $praCP
     *
     * @return praticien
     */
    public function setPraCP($praCP)
    {
        $this->praCP = $praCP;

        return $this;
    }

    /**
     * Get praCP
     *
     * @return string
     */
    public function getPraCP()
    {
        return $this->praCP;
    }

    /**
     * Set praVille
     *
     * @param string $praVille
     *
     * @return praticien
     */
    public function setPraVille($praVille)
    {
        $this->praVille = $praVille;

        return $this;
    }

    /**
     * Get praVille
     *
     * @return string
     */
    public function getPraVille()
    {
        return $this->praVille;
    }

    /**
     * Set coefnotoriete
     *
     * @param integer $coefnotoriete
     *
     * @return praticien
     */
    public function setCoefnotoriete($coefnotoriete)
    {
        $this->coefnotoriete = $coefnotoriete;

        return $this;
    }

    /**
     * Get coefnotoriete
     *
     * @return int
     */
    public function getCoefnotoriete()
    {
        return $this->coefnotoriete;
    }
}

