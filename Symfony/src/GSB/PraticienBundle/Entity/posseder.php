<?php

namespace GSB\PraticienBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * posseder
 *
 * @ORM\Table(name="posseder")
 * @ORM\Entity(repositoryClass="GSB\PraticienBundle\Repository\possederRepository")
 */
class posseder
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
     * @ORM\Column(name="Pos_Diplome", type="string", length=255, nullable=true)
     */
    private $posDiplome;

    /**
     * @var float
     *
     * @ORM\Column(name="Pos_Coefprescription", type="float", nullable=true)
     */
    private $posCoefprescription;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="GSB\PraticienBundle\Entity\praticien")
     * @ORM\Column(name="Pra_Num", type="integer", unique=true)
     */
    private $praNum;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="GSB\PraticienBundle\Entity\specialite")
     * @ORM\Column(name="Spe_Code", type="integer", unique=true)
     */
    private $speCode;


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
     * Set posDiplome
     *
     * @param string $posDiplome
     *
     * @return posseder
     */
    public function setPosDiplome($posDiplome)
    {
        $this->posDiplome = $posDiplome;

        return $this;
    }

    /**
     * Get posDiplome
     *
     * @return string
     */
    public function getPosDiplome()
    {
        return $this->posDiplome;
    }

    /**
     * Set posCoefprescription
     *
     * @param float $posCoefprescription
     *
     * @return posseder
     */
    public function setPosCoefprescription($posCoefprescription)
    {
        $this->posCoefprescription = $posCoefprescription;

        return $this;
    }

    /**
     * Get posCoefprescription
     *
     * @return float
     */
    public function getPosCoefprescription()
    {
        return $this->posCoefprescription;
    }

    /**
     * Set praNum
     *
     * @param integer $praNum
     *
     * @return posseder
     */
    public function setPraNum($praNum)
    {
        $this->praNum = $praNum;

        return $this;
    }

    /**
     * Get praNum
     *
     * @return int
     */
    public function getPraNum()
    {
        return $this->praNum;
    }

    /**
     * Set speCode
     *
     * @param integer $speCode
     *
     * @return posseder
     */
    public function setSpeCode($speCode)
    {
        $this->speCode = $speCode;

        return $this;
    }

    /**
     * Get speCode
     *
     * @return int
     */
    public function getSpeCode()
    {
        return $this->speCode;
    }
}

